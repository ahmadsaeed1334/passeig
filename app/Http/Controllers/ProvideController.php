<?php

namespace App\Http\Controllers;

use App\Models\Provide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProvideController extends Controller
{
    public function index()
    {
        $provide = Provide::first();

        return view('front.provide.index', compact('provide'), [
            'page_title' => 'Provide Section'
        ]);
    }

    public function create()
    {
        $provide = Provide::first();
        if ($provide) {
            return redirect()->route('provides.edit', $provide->id);
        }

        return view('front.provide.create', [
            'page_title' => 'Create Provide Section'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'top_title' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'long_description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('images', 'public') : null;

        Provide::create([
            'top_title' => $request->top_title,
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'image' => $imagePath,
        ]);

        return redirect()->route('provides.index')->with('success', 'Provide section created successfully.');
    }

    public function edit(Provide $provide)
    {
        return view('front.provide.edit', compact('provide'), [
            'page_title' => 'Edit Provide Section'
        ]);
    }

    public function update(Request $request, Provide $provide)
    {
        $request->validate([
            'top_title' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'long_description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->file('image')) {
            if ($provide->image) {
                Storage::disk('public')->delete($provide->image);
            }
            $imagePath = $request->file('image')->store('images', 'public');
            $provide->image = $imagePath;
        }

        $provide->update([
            'top_title' => $request->top_title,
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'image' => $provide->image,
        ]);

        return redirect()->route('provides.index')->with('success', 'Provide section updated successfully.');
    }
}
