<?php

namespace App\Livewire\Admin\Abouts\Teams;

use Illuminate\Http\UploadedFile;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]

class Teams extends Component
{
    use LivewireAlert;
    use WithPagination;
    use WithFileUploads;
    public $teams,
    $subtitle, $title, $description,
    $team_image_1,$team_name_1,$team_designation_1,
    $team_image_2,$team_name_2,$team_designation_2,
    $team_image_3,$team_name_3,$team_designation_3,
    $teamId;
    protected $rules = [
        'title' =>'required',
      'subtitle' =>'required',
        'description' =>'required',
        'team_image_1' =>'required|nullable|image|max:3072',
        'team_name_1' =>'required',
        'team_designation_1' =>'required',
        'team_image_2' =>'required|nullable|image|max:3072',
        'team_name_2' =>'required',
        'team_designation_2' =>'required',
        'team_image_3' =>'required|nullable|image|max:3072',
        'team_name_3' =>'required',
        'team_designation_3' =>'required',
    ];
    public function mount()
    {
        $this->teams = Team::all();
    }
    public function create(){
        $this->validate();
        if ($this->team_image_1 instanceof UploadedFile) {
            $this->team_image_1 = $this->team_image_1->store('teamsImage', 'public');
        }
        if ($this->team_image_2 instanceof UploadedFile) {
            $this->team_image_2 = $this->team_image_2->store('teamsImage', 'public');
        }
        if ($this->team_image_3 instanceof UploadedFile) {
            $this->team_image_3 = $this->team_image_3->store('teamsImage', 'public');
        }
        Team::create([
            'title' => $this->title,
          'subtitle' => $this->subtitle,
            'description' => $this->description,
            'team_image_1' => $this->team_image_1,
            'team_name_1' => $this->team_name_1,
            'team_designation_1' => $this->team_designation_1,
            'team_image_2' => $this->team_image_2,
            'team_name_2' => $this->team_name_2,
            'team_designation_2' => $this->team_designation_2,
            'team_image_3' => $this->team_image_3,
            'team_name_3' => $this->team_name_3,
            'team_designation_3' => $this->team_designation_3,
        ]);
        $this->teams = Team::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'About Added successfully!']);
        $this->alertMessage('success', 'Operation success', 'About Added successfully!');

    }
    public function edit($id){
        $this->teamId = $id;
        $team = Team::find($id);
        $this->title = $team->title;
        $this->subtitle = $team->subtitle;
        $this->description = $team->description;
        $this->team_image_1 = $team->team_image_1;
        $this->team_name_1 = $team->team_name_1;
        $this->team_designation_1 = $team->team_designation_1;
        $this->team_image_2 = $team->team_image_2;
        $this->team_name_2 = $team->team_name_2;
        $this->team_designation_2 = $team->team_designation_2;
        $this->team_image_3 = $team->team_image_3;
        $this->team_name_3 = $team->team_name_3;
        $this->team_designation_3 = $team->team_designation_3;
        $this->dispatch('show-modal');
    }
    public function update(){
        $team = Team::find($this->teamId);
        $this->deleteImage($team->team_image_1, $this->team_image_1);
        $this->deleteImage($team->team_image_2, $this->team_image_2);
        $this->deleteImage($team->team_image_3, $this->team_image_3);
        if ($this->team_image_1 instanceof UploadedFile) {
            $this->validate([
                'team_image_1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
            ]);
            $this->team_image_1 = $this->team_image_1->store('teamsImage', 'public');
            $team->team_image_1 = $this->team_image_1;
        }
        if ($this->team_image_2 instanceof UploadedFile) {
            $this->validate([
                'team_image_2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
            ]);
            $this->team_image_2 = $this->team_image_2->store('teamsImage', 'public');
            $team->team_image_2 = $this->team_image_2;
        }
        if ($this->team_image_3 instanceof UploadedFile) {
            $this->validate([
                'team_image_3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
            ]);
            $this->team_image_3 = $this->team_image_3->store('teamsImage', 'public');
            $team->team_image_3 = $this->team_image_3;
        }
        $team->subtitle = $this->subtitle;
        $team->title = $this->title;
        $team->description = $this->description;
        $team->team_name_1 = $this->team_name_1;
        $team->team_designation_1 = $this->team_designation_1;
        $team->team_name_2 = $this->team_name_2;
        $team->team_designation_2 = $this->team_designation_2;
        $team->team_name_3 = $this->team_name_3;
        $team->team_designation_3 = $this->team_designation_3;
        $team->save();
        $this->teams = Team::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'info','message' => 'About Updated successfully!']);
        $this->alertMessage('success', 'Operation success', 'About Added successfully!');

    }
    protected function deleteImage($oldImagePath, $newImage)
    {
        if ($newImage instanceof UploadedFile) {
            if ($oldImagePath) {
                Storage::disk('public')->delete($oldImagePath);
            }
        }
    }
    public function delete($id){
        $team = Team::find($id);
        $team->delete();
        $this->teams = Team::all();
        $this->dispatch('showAlert', ['type' => 'danger','message' => 'About Deleted successfully!']);
        $this->alertMessage('success', 'Operation success', 'About Added successfully!');
    }
    public function resetFields(){
        $this->title = '';
        $this->subtitle = '';
        $this->description = '';
        $this->team_image_1 = '';
        $this->team_name_1 = '';
        $this->team_designation_1 = '';
        $this->team_image_2 = '';
        $this->team_name_2 = '';
        $this->team_designation_2 = '';
        $this->team_image_3 = '';
        $this->team_name_3 = '';
        $this->team_designation_3 = '';
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
        return view('livewire.admin.abouts.teams.teams');
    }
}
