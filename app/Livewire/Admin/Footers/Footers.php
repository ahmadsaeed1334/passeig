<?php

namespace App\Livewire\Admin\Footers;

use App\Models\Footer;
use Livewire\Component;

class Footers extends Component
{
    public $footers, $number, $address, $description, $icons = [], $working_hours;
    public $footerId;
    public $isUpdate = false;

    protected $rules = [
        'number' => 'required|string',
        'address' => 'required|string',
        'description' => 'required|string',
        'working_hours' => 'required|string',
        'icons.*.name' => 'required|string',
        'icons.*.link' => 'required|url',
    ];

    public function render()
    {
        $this->footers = Footer::all();

        return view('livewire.admin.footers.footers');
    }
    
    public function resetInputFields()
    {
        $this->number = '';
        $this->address = '';
        $this->description = '';
        $this->icons = [];
        $this->working_hours = '';
    }

    public function store()
    {
        $this->validate();

        Footer::create([
            'number' => $this->number,
            'address' => $this->address,
            'description' => $this->description,
            'icons' => $this->icons,
            'working_hours' => $this->working_hours,
        ]);

        $this->resetInputFields();
        $this->alert('success', 'Footer Created Successfully.');
    }

    public function edit($id)
    {
        $footer = Footer::findOrFail($id);
        $this->footerId = $id;
        $this->number = $footer->number;
        $this->address = $footer->address;
        $this->description = $footer->description;
        $this->icons = $footer->icons;
        $this->working_hours = $footer->working_hours;
        $this->isUpdate = true;
    }

    public function update()
    {
        $this->validate();

        $footer = Footer::find($this->footerId);
        $footer->update([
            'number' => $this->number,
            'address' => $this->address,
            'description' => $this->description,
            'icons' => $this->icons,
            'working_hours' => $this->working_hours,
        ]);

        $this->resetInputFields();
        $this->isUpdate = false;
        $this->alert('success', 'Footer Updated Successfully.');
    }

    public function delete($id)
    {
        Footer::find($id)->delete();
        $this->alert('success', 'Footer Deleted Successfully.');
    }

    public function addIcon()
    {
        $this->icons[] = ['name' => '', 'link' => ''];
    }

    public function removeIcon($index)
    {
        unset($this->icons[$index]);
        $this->icons = array_values($this->icons);
    }
}