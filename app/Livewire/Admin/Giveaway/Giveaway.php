<?php

namespace App\Livewire\Admin\Giveaway;

use App\Models\Giveaway as ModelsGiveaway;
use App\Models\GiveawayEntry;
use App\Models\User;
use App\Models\ContestTop;
use Carbon\Carbon;
use Illuminate\Http\UploadedFile;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Collection\links;
use App\Models\Categorie;

use Livewire\Attributes\Layout;
use Livewire\WithPagination;

#[Layout('layouts.app')]
class Giveaway extends Component
{
  
    use LivewireAlert;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $total_giveaways;
    public $searchTerm = '';
    public $name, $short_description, $long_description, $fee, $start_date, $due_date, $actual_price;
    public $status, $file, $giveaways;
    public $selectedGiveaway;
    public $fileView = false;
    public $custom_date_format;
    public $giveawayId;
    public $giveawayName;
    public $totalUsers;
    public $groupedEntries = [];
    public $registeredUsers;
    public $registeredUserss;
    public $userSelection = '';
    public $userEntries = [];

    public $contestTops;
    public $subtitle, $title, $description;
    public $selectedcontestTops, $contestTopId;

    public $categories;
    public $categoryId;
    public $selectedCategories = [];
    public $selectedCategoryId;
    use WithFileUploads;

    protected $listeners = ['categorySelected'];
    protected $rules = [
        'name' => 'required|string',
        'short_description' => 'required|string',
        'long_description' => 'required|string',
        'fee' => 'required|numeric',
        'start_date' => 'required|date',
        'due_date' => 'required|date',
        'actual_price' => 'required|numeric',
        'status' => 'required|in:active,inactive',
        'file' => 'required|mimes:jpeg,png,jpg,gif,mp4,mov,ogg,qt|max:30480',
        'selectedCategories' => 'required|array|min:1',
        'selectedCategories.*' => 'exists:categories,id',
    ];
    public function filterGiveaways($categoryId = null)
    {
        $this->selectedCategoryId = $categoryId;
        $this->giveaways = ModelsGiveaway::when($categoryId, function ($query) use ($categoryId) {
            return $query->whereHas('categories', function ($query) use ($categoryId) {
                $query->where('categories.id', $categoryId);
            });
        })->get();
    }
    public function mount()
    {
        $this->contestTops = ContestTop::all();
        $this->giveaways = ModelsGiveaway::all();
        $this->categories = Categorie::all(); 
    }

    public function create()
    {
        $this->validate();
        $fileModel = $this->handleFileUpload($this->file);

        $giveaway = ModelsGiveaway::create([
            'name' => $this->name,
            'short_description' => $this->short_description,
            'long_description' => $this->long_description,
            'fee' => $this->fee,
            'start_date' => $this->start_date,
            'due_date' => $this->due_date,
            'actual_price' => $this->actual_price,
            'status' => $this->status,
            'file_path' => $fileModel->path,
            'file_type' => $fileModel->extension,
        ]);
        $selectedCategoryIds = $this->selectedCategories;
        $giveaway->categories()->attach($selectedCategoryIds);
        $this->giveaways = ModelsGiveaway::all();
        $this->resetFields();

        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Giveaway created successfully!']);
        $this->dispatch('closeModal', ['modalId' => "addGiveawayModal"]);

        $this->alertMessage();
    }



    public function edit($giveawayId)
    {
        $this->giveawayId = $giveawayId;
        $this->selectedGiveaway = ModelsGiveaway::find($giveawayId);
        $this->name = $this->selectedGiveaway->name;
        $this->short_description = $this->selectedGiveaway->short_description;
        $this->long_description = $this->selectedGiveaway->long_description;
        $this->fee = $this->selectedGiveaway->fee;
        $this->start_date = $this->selectedGiveaway->start_date;
        $this->due_date = $this->selectedGiveaway->due_date;
        $this->actual_price = $this->selectedGiveaway->actual_price;
        $this->status = $this->selectedGiveaway->status;
        $this->file = $this->selectedGiveaway->file_path;
        $this->fileView = true;

        if ($this->start_date) {
            $this->start_date = Carbon::parse($this->start_date)->format('Y-m-d');
        }
        if ($this->due_date) {
            $this->due_date = Carbon::parse($this->due_date)->format('Y-m-d');
        }
    }

    public function update()
    {
        $giveaway = ModelsGiveaway::find($this->giveawayId);
        if ($this->file instanceof UploadedFile) {
            $this->validate([
                'file' => 'required|image|max:3072',
            ]);
            $this->file = $this->file->store('giveaways', 'public');
            $giveaway->file_path = $this->file;
        }
        $giveaway->name = $this->name;
        $giveaway->short_description = $this->short_description;
        $giveaway->long_description = $this->long_description;
        $giveaway->fee = $this->fee;
        $giveaway->start_date = $this->start_date;
        $giveaway->due_date = $this->due_date;
        $giveaway->actual_price = $this->actual_price;
        $giveaway->status = $this->status;
        $giveaway->save();
        $this->giveaways = ModelsGiveaway::all();
        $selectedCategoryIds = $this->selectedCategories; 
        $giveaway->categories()->sync($selectedCategoryIds);
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Giveaway updated successfully!']);
        $this->alertMessage();
    }
    public function destroyGiveaway($giveawayId)
    {
        $giveaway = ModelsGiveaway::find($giveawayId);
        if ($giveaway) {
            $giveaway->delete();
            $this->giveaways = ModelsGiveaway::all();
            $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Giveaway deleted successfully!']);
            $this->dispatch('closeModal', ['modalId' => "editGiveawayModal"]);
            $this->alertMessage();
        }
    }

    private function handleFileUpload($file)
    {
        $extension = $file->getClientOriginalExtension();
        $filename = uniqid() . '.' . $extension;
        $path = $file->storeAs('giveaways', $filename, 'public');
        return (object) ['path' => $path, 'extension' => $extension];
    }

    private function determineFileType($extension)
    {
        $imageExtensions = ['jpeg', 'png', 'jpg', 'gif'];
        $videoExtensions = ['mp4', 'mov', 'ogg', 'qt'];

        if (in_array($extension, $imageExtensions)) {
            return 'image';
        } elseif (in_array($extension, $videoExtensions)) {
            return 'video';
        }
        return 'unknown';
    }
    public function render()
    {
        $query = ModelsGiveaway::query();

    // if ($this->search !== '') {
    //     $query->where('name', 'like', '%' . $this->search . '%')
    //           ->orWhere('id', 'like', '%' . $this->search . '%');
    // }

    // $giveaways = $query->get();
    // Log::info($query->toSql(), $query->getBindings());

        if (!$this->registeredUsers) {
            $this->registeredUsers = [];
        }
        if ($this->searchTerm !== '') {
            $searchTerm = trim($this->search); // Trim the search term
            // Apply search to relevant columns
            $query->where('subtitle', 'like', '%' . $searchTerm . '%')
                  ->orWhere('title', 'like', '%' . $searchTerm . '%')
                  ->orWhere('description', 'like', '%' . $searchTerm . '%')
                  ->orWhere('name', 'like', '%' . $searchTerm . '%')
                  ->orWhere('short_description', 'like', '%' . $searchTerm . '%')
                  ->orWhere('long_description', 'like', '%' . $searchTerm . '%');
        };
        // if ($this->searchTerm !== '') {
        //     $query->search($this->searchTerm);
        // }
        // $giveaways = ModelsGiveaway::paginate(10);
        $giveaways = ModelsGiveaway::all();
        $categories = Categorie::all();
        $this->giveaways = $giveaways;
        $this->categories = $categories;
      
        return view('livewire.admin.giveaway.giveaway', [
            'giveaways' => $this->giveaways,
            'categories' => $this->categories,
        ]);
    }
    public function discardChanges()
    {
        $this->resetFields();
        $this->dispatch('hide-modal'); 
    }

    public function resetFields()
    {
        $this->name = '';
        $this->short_description = '';
        $this->long_description = '';
        $this->fee = '';
        $this->due_date = '';
        $this->start_date = '';
        $this->actual_price = '';
        $this->status = '';
        $this->file = '';
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
    public function fileDelete()
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }

        if ($this->file) {
            if (Storage::disk('public')->exists($this->file)) {
                Storage::disk('public')->delete($this->file);
            }
            $this->file = null;
            $this->fileView = false;
            $this->dispatch('showAlert', ['type' => 'success', 'message' => 'File deleted successfully!']);
        } else {
            $this->dispatch('showAlert', ['type' => 'warning', 'message' => 'No file selected for deletion!']);
        }
    }
    public function entryGiveaway($giveawayId, ModelsGiveaway $giveaway)
    {
        if (!$giveaway || $giveaway->id !== $giveawayId) {
            $giveaway = ModelsGiveaway::find($giveawayId);
        }
        if (!$giveaway) {
            return;
        }
        $this->selectedGiveaway = $giveaway;
        $this->giveawayName = $giveaway->name;
        $this->giveawayId = $giveawayId;
        $users = User::where('user_type', '!=', -1)->pluck('name', 'id')->toArray();
        $this->registeredUsers = $users;
    }

    // public function viewUserEntry($giveawayId)
    // {

    //     $giveaway = ModelsGiveaway::find($giveawayId);
    //     $this->giveawayName = $giveaway->name;
    //     $usersWithEntryCount = GiveawayEntry::select('users.name', 'users.id', DB::raw('count(*) as entry_count'))
    //         ->join('users', 'users.id', '=', 'giveaway_entries.user_id')
    //         ->where('giveaway_entries.giveaway_id', $giveawayId)
    //         ->groupBy('users.name', 'users.id')
    //         ->get();
    //     $this->registeredUserss = $usersWithEntryCount;
    //     $this->giveawayId = $giveawayId;
    // }
    public function viewUserEntrys($giveawayId)
    {
        $giveaway = ModelsGiveaway::find($giveawayId);
        $this->giveawayName = $giveaway->name;
        $usersWithEntryCount = GiveawayEntry::select('users.name', 'users.id', DB::raw('count(*) as entry_count'))
            ->join('users', 'users.id', '=', 'giveaway_entries.user_id')
            ->where('giveaway_entries.giveaway_id', $giveawayId)
            ->groupBy('users.name', 'users.id')
            ->orderBy('entry_count', 'desc')
            ->get(); // Paginate the results to show 5 per page.

        $this->registeredUserss = $usersWithEntryCount;
        $this->giveawayId = $giveawayId;
    }
    public function loadMore()
    {
        $this->registeredUserss = $this->registeredUserss->nextPage();
    }
    public function submitEntry()
    {
        $entry = new GiveawayEntry;
        $entry->giveaway_id = $this->giveawayId;
        $entry->user_id = $this->userSelection;
        $entry->save();
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Your entry has been submitted successfully!']);
        $this->dispatch('closeModal', ['modalId' => "entryGiveawayModal"]);
        $this->alertMessage();
        $this->userSelection = '';
    }

    public function createContestTops()
    {
        $this->validate([
            'subtitle' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        ContestTop::create([
            'subtitle' => $this->subtitle,
            'title' => $this->title,
            'description' => $this->description
        ]);
        $this->contestTops = ContestTop::all();
        $this->resetFieldstop();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Contest added successfully!']);
        $this->alertMessage();
    }
    public function resetFieldstop()
    {
        $this->subtitle = '';
        $this->title = '';
        $this->description = '';
    }
    public function deleteContestTop($id)
    {
        ContestTop::find($id)->delete();
        $this->contestTops = ContestTop::all();
        $this->dispatch('showAlert', ['type' => 'warning', 'message' => 'Contest deleted successfully!']);
        $this->dispatch('closeModal', ['modalId' => "contestTopModal"]);
        $this->alertMessage();
    }
    public function editContestTops($id)
    {
        $contestTop = ContestTop::find($id);
        $this->subtitle = $contestTop->subtitle;
        $this->title = $contestTop->title;
        $this->description = $contestTop->description;
        $this->contestTopId = $id;
        $this->dispatch('show-modal', ['modalId' => "contestTopModal"]);
    }
    public function updateContestTop()
    {
        $contestTop = ContestTop::find($this->contestTopId);
        $contestTop->subtitle = $this->subtitle;
        $contestTop->title = $this->title;
        $contestTop->description = $this->description;
        $contestTop->save();
        $this->contestTops = ContestTop::all();
        $this->resetFieldstop();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'warning', 'message' => 'Contest updated successfully!']);
        $this->alertMessage();
    }
}
