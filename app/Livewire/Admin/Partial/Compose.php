<?php

namespace App\Livewire\Admin\Partial;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Mail\SendCustomMail;
use App\Mail\SendFailReportMail;
use App\Models\StudentSession;
use Spatie\Browsershot\Browsershot;
use Illuminate\Support\Facades\Mail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class Compose extends Component
{
    use LivewireAlert;

    public $name = null, $email = null, $subject = null, $message = null, $senderName = null, $customerId = null, $sId = null, $cc = null;

    protected $listeners = ['refresh' => '$refresh', 'messageOnMessage' => 'messageOnMessage', 'reload' => '$refresh'];


    public function messageOnMessage($name, $email, $customerId = null, $sId = null, $cc = null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->customerId = $customerId;
        $this->sId = $sId;
        $this->cc = $cc;
    }

    public function send_Email()
    {
        ini_set('memory_limit', '-1');
        $this->validate(
            [
                'email' => 'required',
                'subject' => 'required',
                'message' => 'required',
            ],
            [
                'email.required' => 'The :attribute cannot be empty.',
                // 'email.email' => 'The :attribute format is not valid.',
                'subject' => 'The :attribute cannot be empty.',
                'message' => 'The :attribute cannot be empty.',
            ],
            [
                'email' => 'Email Address',
                'subject' => 'Subject',
                'message' => 'Message',
            ]
        );
        if ($this->customerId) {
            if (!$this->email) {
                return $this->alert('error', 'Email Not Found', [
                    'position' =>  setting('general_settings.alert_position'),
                    'timer' =>  '',
                    'toast' =>  true,
                    'text' => $this->name . ' Email Not Found First Add Email From Customers then Try Again',
                    'confirmButtonText' =>  'Ok',
                    'cancelButtonText' =>  'Cancel',
                    'showCancelButton' =>  false,
                    'showConfirmButton' =>  true,
                ]);
            }
            $email = Str::lower(str_replace(' ', '', $this->email));
            $emails = explode(',', $email);
            $cc = Str::lower(str_replace(' ', '', $this->cc));
            $cc = explode(',', $cc);
            ini_set('memory_limit', '-1');
            $data = ['name' => $this->name, 'email' => $this->email, 'senderName' => $this->senderName, 'content' => $this->message,];
            $cid = $this->customerId;
            $customer = StudentSession::whereTrainingSessionId($this->sId)->whereHas('student', function ($a) use ($cid) {
                $a->whereCustomerId($cid);
            })->with(['student' => function ($q) use ($cid) {
                $q->whereCustomerId($cid);
                $q->select('id', 'customer_id', 'employee_id', 'user_id');
                $q->with('customer:id,name');
                $q->with('user:id,name');
            }, 'session' => function ($q) {
                $q->with('course:id,name');
                $q->with('instructor:user_id,name');
                $q->select('id', 'course_id', 'session_start_date', 'session_end_date');
            }])->select('id', 'training_session_id', 'student_id')->first();
            $students = StudentSession::whereTrainingSessionId($this->sId)
                ->whereHas('student', function ($a) use ($cid) {
                    $a->whereCustomerId($cid);
                })
                ->with('student', function ($q) {
                    $q->select('id', 'user_id', 'position', 'employee_id', 'rig_number');
                    $q->with('user', function ($b) {
                        $b->orderBy('name');
                        $b->select('id', 'name');
                    });
                })
                ->select('id', 'student_id',  'attendance')
                ->get();
            $html = view('livewire.admin.training-sessions.attendance-sheet-for-mail', ['customer' => $customer, 'students' => $students])->render();
            $pdf = Browsershot::html($html)->usePipe()->noSandbox()->ignoreHttpsErrors()->setOption('args', ['--disable-web-security', '--disable-setuid-sandbox'])->format('A4')->pdf();
            Mail::to($email)
                ->cc($cc)
                // ->bcc(setting('general_settings.email'))
                ->send(new SendFailReportMail($data, $pdf));
        } else {
            $emails = Str::lower(str_replace(' ', '', $this->email));
            $emails = explode(',', $this->email);
            dispatch(function () use ($emails) {
                ini_set('memory_limit', '-1');
                foreach ($emails as $email) {
                    $data = ['name' => $this->name, 'email' => $email, 'subject' => $this->subject, 'content' => $this->message, 'senderName' => $this->senderName];
                    Mail::to($email)->send(new SendCustomMail($data));
                }
            })->delay(now());
        }
        $this->alert('success', 'Added To Queue', [
            'position' =>  setting('general_settings.alert_position'),
            'timer' =>  3000,
            'toast' =>  true,
            'text' => 'Your Mail Added to Queue Successfully and sent as soon as possible',
            'confirmButtonText' =>  'Ok',
            'cancelButtonText' =>  'Cancel',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false,
        ]);
        $this->emitUp('closeMessage');
        $this->reset();
        // Mail::send('emails.custom-email', $data, function ($message) {
        //     $message->from('john@johndoe.com', 'John Doe');
        //     $message->sender('john@johndoe.com', 'John Doe');
        //     $message->to('To@doqdoe.com', 'to Doe');
        //     $message->cc('cc@doqdoe.com', 'cc Doe');
        //     $message->bcc('bcc@doqdoe.com', 'bcc Doe');
        //     $message->replyTo('replyTo@johndoe.com', 'replyTo Doe');
        //     $message->subject('Subject');
        //     // $message->priority(3);
        //     // $message->attach('pathToFile');
        // });
        // Mail::to('To@doqdoe.com')->send(new SendTestMail($data));
    }

    public function mount()
    {
        $this->senderName = auth()->user()->name;
    }

    public function render()
    {
        return view('livewire.admin.partial.compose');
    }
}
