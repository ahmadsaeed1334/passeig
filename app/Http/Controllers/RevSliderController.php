<?php

namespace App\Http\Controllers;

use App\Models\RevSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RevSliderController extends Controller
{
    public function index()
    {
        $sliders = RevSlider::all();
        return view('front.rev_slider.index', compact('sliders'),[
            'page_title' => 'Rev Slider',
        ]);
    }

    public function create()
    {
        return view('front.rev_slider.create',[
            'page_title' => 'Create Slider',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('images', 'public') : null;

        RevSlider::create([
            'title' => $request->title,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->route('rev_slider.index')->with('success', 'Slider created successfully.');
    }

    public function edit(RevSlider $rev_slider)
    {
        return view('front.rev_slider.edit', compact('rev_slider'),[
            'page_title' => 'Edit Slider',
        ]);
    }

    public function update(Request $request, RevSlider $rev_slider)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
        ]);

        if ($request->file('image')) {
            // Delete old image if exists
            if ($rev_slider->image) {
                Storage::disk('public')->delete($rev_slider->image);
            }
            $imagePath = $request->file('image')->store('images', 'public');
            $rev_slider->image = $imagePath;
        }

        $rev_slider->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('rev_slider.index')->with('success', 'Slider updated successfully.');
    }

    public function destroy(RevSlider $rev_slider)
    {
        if ($rev_slider->image) {
            Storage::disk('public')->delete($rev_slider->image);
        }

        $rev_slider->delete();
        return redirect()->route('rev_slider.index')->with('success', 'Slider deleted successfully.');
    }
}
