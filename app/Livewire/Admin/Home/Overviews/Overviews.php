<?php

namespace App\Livewire\Admin\Home\Overviews;

use App\Models\Overview;
use Illuminate\Http\UploadedFile;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class Overviews extends Component
{
//     <div class="ratings">
//     @for ($i = 1; $i <= $testimonial->rating; $i++)
//         <i class="fas fa-star"></i>
//     @endfor
// </div>
    use LivewireAlert;
    use WithPagination;
    use WithFileUploads;
    public $overviews;
    public $subtitle, $title, $description;
    public $card_icon_1, $card_number_1, $card_description_1;
    public $card_icon_2, $card_number_2, $card_description_2;
    public $card_icon_3, $card_number_3, $card_description_3;
    public $selectedOverview, $overviewId;

    protected $rules = [
        'subtitle' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'card_icon_1' => 'required|nullable|image|max:3072',
        'card_number_1' => 'required|nullable|integer',
        'card_description_1' => 'required|nullable|string',
        'card_icon_2' => 'required|nullable|image|max:3072',
        'card_number_2' => 'required|nullable|integer',
        'card_description_2' => 'required|nullable|string',
        'card_icon_3' => 'required|nullable|image|max:3072',
        'card_number_3' => 'required|nullable|integer',
        'card_description_3' => 'required|nullable|string',
    ];
    public function mount()
    {
        $this->overviews = Overview::all();
    }

    public function create()
    {
        $this->validate();
        if ($this->card_icon_1 instanceof UploadedFile) {
            $this->card_icon_1 = $this->card_icon_1->store('overviewCardIcons', 'public');
        }
        if ($this->card_icon_2 instanceof UploadedFile) {
            $this->card_icon_2 = $this->card_icon_2->store('overviewCardIcons', 'public');
        }
        if ($this->card_icon_3 instanceof UploadedFile) {
            $this->card_icon_3 = $this->card_icon_3->store('overviewCardIcons', 'public');
        }
        Overview::create([
            'subtitle' => $this->subtitle,
            'title' => $this->title,
            'description' => $this->description,
            'card_icon_1' => $this->card_icon_1,
            'card_number_1' => $this->card_number_1,
            'card_description_1' => $this->card_description_1,
            'card_icon_2' => $this->card_icon_2,
            'card_number_2' => $this->card_number_2,
            'card_description_2' => $this->card_description_2,
            'card_icon_3' => $this->card_icon_3,
            'card_number_3' => $this->card_number_3,
            'card_description_3' => $this->card_description_3,
        ]);

        $this->overviews = Overview::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
    $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Overview added successfully!']);
    $this->alertMessage();
    }

   
    public function edit($overviewId)
    {
        $this->overviewId = $overviewId;
        $this->selectedOverview = Overview::find($overviewId);

        $this->subtitle = $this->selectedOverview->subtitle;
        $this->title = $this->selectedOverview->title;
        $this->description = $this->selectedOverview->description;
        $this->card_icon_1 = $this->selectedOverview->card_icon_1;
        $this->card_number_1 = $this->selectedOverview->card_number_1;
        $this->card_description_1 = $this->selectedOverview->card_description_1;
        $this->card_icon_2 = $this->selectedOverview->card_icon_2;
        $this->card_number_2 = $this->selectedOverview->card_number_2;
        $this->card_description_2 = $this->selectedOverview->card_description_2;
        $this->card_icon_3 = $this->selectedOverview->card_icon_3;
        $this->card_number_3 = $this->selectedOverview->card_number_3;
        $this->card_description_3 = $this->selectedOverview->card_description_3;
    }

    public function update()
    {
        $overview = Overview::find($this->overviewId);
        
        if ($this->card_icon_1 instanceof UploadedFile) {
            $this->validate([
                'card_icon_1' => 'required|image|max:3072',
            ]);
            $this->card_icon_1 = $this->card_icon_1->store('overviewCardIcons', 'public');
            $overview->card_icon_1 = $this->card_icon_1;
        }
        if ($this->card_icon_2 instanceof UploadedFile) {
            $this->validate([
                'card_icon_2' => 'required|image|max:3072',
            ]);
            $this->card_icon_2 = $this->card_icon_2->store('overviewCardIcons', 'public');
            $overview->card_icon_2 = $this->card_icon_2;
        }
        if ($this->card_icon_3 instanceof UploadedFile) {
            $this->validate([
                'card_icon_3' => 'required|image|max:3072',
            ]);
            $this->card_icon_3 = $this->card_icon_3->store('overviewCardIcons', 'public');
            $overview->card_icon_3 = $this->card_icon_3;
        }
        $overview->subtitle = $this->subtitle;
        $overview->title = $this->title;
        $overview->description = $this->description;
        $overview->card_number_1 = $this->card_number_1;
        $overview->card_description_1 = $this->card_description_1;
        $overview->card_number_2 = $this->card_number_2;
        $overview->card_description_2 = $this->card_description_2;
        $overview->card_number_3 = $this->card_number_3;
        $overview->card_description_3 = $this->card_description_3;
        $overview->save();
        $this->overviews = Overview::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'info','message' => 'Overview updated successfully!']);
        $this->alertMessage();

       
    }

    public function delete($overviewId)
    {
        $this->overviewId = $overviewId;
        $this->selectedOverview = Overview::find($overviewId);
    }
    private function handleFileUpload($field)
{
    if ($this->{$field} instanceof UploadedFile) {
        $extension = $this->{$field}->getClientOriginalExtension();
        $filename = uniqid() . '.' . $extension;
        $this->{$field} = $this->{$field}->storeAs('overviewCardIcons', $filename, 'public');
    }
}

 private function resetFields()
    {
        $this->subtitle = '';
        $this->title = '';
        $this->description = '';
        $this->card_icon_1 = '';
        $this->card_number_1 = '';
        $this->card_description_1 = '';
        $this->card_icon_2 = '';
        $this->card_number_2 = '';
        $this->card_description_2 = '';
        $this->card_icon_3 = '';
        $this->card_number_3 = '';
        $this->card_description_3 = '';
    }

    public function alertMessage($type = null, $title = null, $message = null, $position = null)
    {
        $this->alert($type ? $type : 'success', $title ? $title : alert('title'), [
            'position' => $position ? $position : alert('position'),
            'timer' =>  alert('timer'),
            'toast' =>  true,
            'text' => $message ? $message : alert('message'),
            'background' => alert('background'),
        ]);
    }
    public function discardChanges()
    {
        $this->resetFields();
        $this->dispatch('hide-modal'); // You may need to handle modal hiding through JavaScript
    }
    
    public function render()
    {
        return view('livewire.admin.home.overviews.overviews');
    }
}
