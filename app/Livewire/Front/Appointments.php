<?php

namespace App\Livewire\Front;

use App\Models\AppointmentBook;
use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\ServicesCategory;
use App\Models\AppointmentService;
use App\Models\ServicesTitle;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;

#[Layout('layouts.front')]
class Appointments extends Component
{
    use LivewireAlert;
    public $categories;
    public $selectedCategory;
    public $selectedSubCategory;
    public $subCategories;
    public $appointmentServices;
    public $selectedServices = [];
    public $selectedDateTime = [];
    public $servicesTitle;
    public function mount()
    {
        $this->categories = ServicesCategory::whereNull('parent_id')->get();
        $this->subCategories = collect();
        $this->appointmentServices = collect();

        if ($this->categories->isNotEmpty()) {
            $this->selectCategory($this->categories->first()->id);
        }
        $this->servicesTitle = ServicesTitle::first();

    }

    public function selectCategory($categoryId)
    {
        $this->selectedCategory = ServicesCategory::with('subcategories.appointmentServices')->find($categoryId);
        $this->subCategories = $this->selectedCategory->subcategories;

        // Clear subcategory and appointment services if no subcategory is selected
        $this->selectedSubCategory = null;
        $this->appointmentServices = $this->selectedCategory->appointmentServices;
    }

    public function selectSubCategory($subCategoryId)
    {
        $this->selectedSubCategory = ServicesCategory::with('appointmentServices')->find($subCategoryId);
        $this->appointmentServices = $this->selectedSubCategory->appointmentServices;
    }

    public function toggleServiceSelection($serviceId)
    {
        if (in_array($serviceId, $this->selectedServices)) {
            $this->selectedServices = array_diff($this->selectedServices, [$serviceId]);
            unset($this->selectedDateTime[$serviceId]); // Remove date and time if deselected
        } else {
            $this->selectedServices[] = $serviceId;
        }
    }


    public function selectDateTime($serviceId, $date, $time)
{
    Log::info('selectDateTime triggered with', ['serviceId' => $serviceId, 'date' => $date, 'time' => $time]);
    dd($serviceId, $date, $time);
    Log::info('selectDateTime triggered with', [
        'serviceId' => $serviceId,
        'date' => $date,
        'time' => $time
    ]);
    if (!$date || !$time) {
        $this->alert('error', 'Please select a valid date and time.');
        return;
    }

    $dateTime = Carbon::parse("$date $time");

    // Validate that the selected date is not in the past
    if ($dateTime->isBefore(Carbon::today())) {
        $this->alert('error', 'Cannot book an appointment for a past date.');
        return;
    }

    $service = AppointmentService::find($serviceId);
    $endTime = $dateTime->copy()->addMinutes($service->duration);

    foreach ($this->selectedDateTime as $selected) {
        if (isset($selected['service_id']) && $selected['service_id'] == $serviceId) {
            $this->alert('error', 'This service already has a selected date and time.');
            return;
        }

        if (isset($selected['date']) && isset($selected['time'])) {
            $selectedStart = Carbon::parse($selected['date'] . ' ' . $selected['time']);
            $selectedEnd = $selectedStart->copy()->addMinutes($selected['duration']);

            if ($dateTime->between($selectedStart, $selectedEnd) || $endTime->between($selectedStart, $selectedEnd)) {
                $this->alert('error', 'This date and time is already selected.');
                return;
            }
        }
    }

    // Check for overlapping appointments in the database
    $conflictingAppointments = AppointmentBook::where('date', $date)
        ->where(function ($query) use ($dateTime, $endTime) {
            $query->whereBetween('time', [$dateTime->format('H:i:s'), $endTime->format('H:i:s')])
                ->orWhereBetween('end_time', [$dateTime->format('H:i:s'), $endTime->format('H:i:s')]);
        })
        ->exists();

    if ($conflictingAppointments) {
        $this->alert('error', 'This time slot is already booked.');
        return;
    }

    $this->selectedDateTime[$serviceId] = [
        'service_id' => $serviceId,
        'date' => $date,
        'time' => $time,
        'duration' => $service->duration,
    ];

    $this->alert('success', 'Date and time selected successfully.');

    // Debugging to ensure date and time are set correctly
    dd($this->selectedDateTime);
    Log::info('Selected DateTime:', $this->selectedDateTime);
}



public function bookAppointments()
{
    // Check if the user is logged in
    if (!Auth::check()) {
        $this->alert('error', 'Please log in to book an appointment.');
        return;
    }

    // Validate that all selected services have a valid date and time
    foreach ($this->selectedServices as $serviceId) {
        if (!isset($this->selectedDateTime[$serviceId]['date']) || !isset($this->selectedDateTime[$serviceId]['time'])) {
            $this->alert('error', 'Please set date and time for all selected services.');
            return;
        }

        // Validate that the selected date is not in the past
        $date = $this->selectedDateTime[$serviceId]['date'];
        $dateTime = Carbon::parse($date);

        if ($dateTime->isBefore(Carbon::today())) {
            $this->alert('error', 'Cannot book an appointment for a past date.');
            return;
        }
    }

    // Proceed with booking the appointments
    foreach ($this->selectedServices as $serviceId) {
        $service = AppointmentService::find($serviceId); // Fetch the service by ID

        if (!$service) {
            $this->alert('error', 'Selected service not found.');
            continue;
        }

        $time = $this->selectedDateTime[$serviceId]['time'];
        $dateTime = Carbon::parse("$date $time");
        $endTime = $dateTime->copy()->addMinutes($service->duration);

        // Check for conflicting appointments
        $conflictingAppointment = AppointmentBook::where('service_id', $serviceId)
            ->where('date', $date)
            ->where(function ($query) use ($dateTime, $endTime) {
                $query->where(function ($q) use ($dateTime, $endTime) {
                    $q->where('time', '<=', $dateTime->format('H:i:s'))
                      ->where('end_time', '>', $dateTime->format('H:i:s'));
                })
                ->orWhere(function ($q) use ($dateTime, $endTime) {
                    $q->where('time', '<', $endTime->format('H:i:s'))
                      ->where('end_time', '>=', $endTime->format('H:i:s'));
                });
            })
            ->exists();

        if ($conflictingAppointment) {
            $this->alert('error', 'This time slot is already booked for the selected service.');
            return;
        }

        // Save the appointment if no conflict exists
        AppointmentBook::create([
            'user_id' => Auth::id(),
            'service_id' => $serviceId,
            'date' => $date,
            'time' => $time,
            'end_time' => $endTime->format('H:i'),
        ]);
    }

    $this->alert('success', 'Appointments booked successfully.');
    $this->reset(['selectedServices', 'selectedDateTime']);
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

    function getNextWeekDates()
    {
        $dates = [];
        $startDate = Carbon::now()->startOfWeek();

        for ($i = 0; $i < 7; $i++) {
            $dates[] = $startDate->copy()->addDays($i);
        }

        return $dates;
    }

    function getTimeSlots()
    {
        $times = [];
        $start = Carbon::createFromTime(9, 0); // start time
        $end = Carbon::createFromTime(17, 0); // end time

        while ($start->lt($end)) {
            $times[] = $start->format('H:i');
            $start->addMinutes(15);
        }

        return $times;
    }

       public function render()

     {
         return view('livewire.front.appointments');
     }
 }
