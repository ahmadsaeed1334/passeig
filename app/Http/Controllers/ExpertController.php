<?php

namespace App\Http\Controllers;

use App\Models\Expert;
use App\Models\ExpertTitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExpertController extends Controller
{
    public function index()
    {
        $expertTitle = ExpertTitle::first();
        $experts = Expert::paginate(10);
        $totalExperts  = Expert::count(); // Get the total count of blogs

        return view('front.experts.index', compact('expertTitle', 'experts','totalExperts'), [
            'page_title' => 'Experts'
        ]);
    }

    public function createTitle()
    {
        return view('front.experts.create_title', [
            'page_title' => 'Create Expert Title'
        ]);
    }

    public function storeTitle(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        ExpertTitle::create($request->all());

        return redirect()->route('experts.index')->with('success', 'Expert Title created successfully.');
    }


    public function editTitle(ExpertTitle $expertTitle)
    {
        return view('front.experts.edit_title', compact('expertTitle'), [
            'page_title' => 'Edit Expert Title'
        ]);
    }

    public function updateTitle(Request $request, ExpertTitle $expertTitle)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $expertTitle->update($request->all());

        return redirect()->route('experts.index')->with('success', 'Expert Title updated successfully.');
    }

    public function createExpert()
    {
        return view('front.experts.create_expert', [
            'page_title' => 'Create Expert'
        ]);
    }

    public function storeExpert(Request $request)
{
    // dd($request->all());

    $request->validate([
        'name' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $imagePath = $request->file('image') ? $request->file('image')->store('images', 'public') : null;

    Expert::create([
        'name' => $request->name,
        'title' => $request->title,
        'image' => $imagePath,
    ]);

    return redirect()->route('experts.index')->with('success', 'Expert created successfully.');
}

    public function editExpert(Expert $expert)
    {
        return view('front.experts.edit_expert', compact('expert'), [
            'page_title' => 'Edit Expert'
        ]);
    }

    public function updateExpert(Request $request, Expert $expert)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->file('image')) {
            if ($expert->image) {
                Storage::disk('public')->delete($expert->image);
            }
            $imagePath = $request->file('image')->store('images', 'public');
            $expert->image = $imagePath;
        }

        $expert->update([
            'name' => $request->name,
            'title' => $request->title,
        ]);

        return redirect()->route('experts.index')->with('success', 'Expert updated successfully.');
    }

    public function destroyExpert(Expert $expert)
    {
        if ($expert->image) {
            Storage::disk('public')->delete($expert->image);
        }

        $expert->delete();
        return redirect()->route('experts.index')->with('success', 'Expert deleted successfully.');
    }
}
