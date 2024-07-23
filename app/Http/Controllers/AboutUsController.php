<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;
use Illuminate\Support\Facades\Storage;

class AboutUsController extends Controller
{
    public function index()
    {
        $abouts  = AboutUs::all();
        return view('front.pages.aboutus.index',[
            'abouts' => $abouts,
        'page_title'=>'About Us']);
    }

    public function create()
    {
        return view('front.pages.aboutus.create',[
        'page_title'=>'Create About Us']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'long_description' => 'required|string',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('aboutUsImage', 'public');
        }

        AboutUs::create([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'image' => $imagePath,
            'long_description' => $request->long_description,
        ]);

        return redirect()->route('aboutus.index')->with('success', 'About Us created successfully.');
    }

    // public function show(AboutUs $aboutu)
    // {
    //     return view('front.page.aboutus.show', compact('aboutu')
    //     ,[
    //         'aboutu'=> $aboutu,
    //     'page_title'=>'Show About Us']);
    // }

    public function edit(AboutUs  $about)
    {
        return view('front.pages.aboutus.edit',[
            'about'=> $about,
        'page_title'=>'Update About Us']
    );
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'long_description' => 'required|string',
        ]);

        $about = AboutUs::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($about->image) {
                Storage::disk('public')->delete($about->image);
            }
            // Store the new image
            $data['image'] = $request->file('image')->store('aboutUsImage', 'public');
        }

        $about->update($data);

        return redirect()->route('aboutus.index')->with('success', 'About Us updated successfully.');
    }

    public function destroy($id)    {
        $about = AboutUs::findOrFail($id);

        if ($about->image) {
            Storage::disk('public')->delete($about->image);
        }

        $about->delete();

        return redirect()->route('aboutus.index')->with('success', 'About Us deleted successfully.');
    }

    public function showDownloadPage()
{
    // Move the file to the public directory
    Storage::move('path/to/final_edited_passport_image_corrected.jpeg', 'public/final_edited_passport_image_corrected.jpeg');

    // Return the view
    return view('aboutus.index');
}
}
