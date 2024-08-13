<?php

namespace App\Http\Controllers;

use App\Models\Health;
use App\Models\HealthTitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HealthController extends Controller
{
    public function index()
    {
        $healthTitle = HealthTitle::first();
        $healths = Health::paginate(10);

        return view('front.healths.index', compact('healthTitle', 'healths'), [
            'page_title' => 'Health Section'
        ]);
    }

    public function createTitle()
    {
        return view('front.healths.create_title', [
            'page_title' => 'Create Health Title'
        ]);
    }

    public function storeTitle(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        HealthTitle::create($request->all());

        return redirect()->route('healths.index')->with('success', 'Health Title created successfully.');
    }

    public function editTitle(HealthTitle $healthTitle)
    {
        return view('front.healths.edit_title', compact('healthTitle'), [
            'page_title' => 'Edit Health Title'
        ]);
    }

    public function updateTitle(Request $request, HealthTitle $healthTitle)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $healthTitle->update($request->all());

        return redirect()->route('healths.index')->with('success', 'Health Title updated successfully.');
    }

    public function createHealth()
    {
        return view('front.healths.create_health', [
            'page_title' => 'Create Health'
        ]);
    }

    public function storeHealth(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $iconPath = $request->file('icon') ? $request->file('icon')->store('images/icons', 'public') : null;
        $imagePath = $request->file('image') ? $request->file('image')->store('images', 'public') : null;

        Health::create([
            'title' => $request->title,
            'description' => $request->description,
            'icon' => $iconPath,
            'image' => $imagePath,
        ]);

        return redirect()->route('healths.index')->with('success', 'Health created successfully.');
    }

    public function editHealth(Health $health)
    {
        return view('front.healths.edit_health', compact('health'), [
            'page_title' => 'Edit Health'
        ]);
    }

    public function updateHealth(Request $request, Health $health)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->file('icon')) {
            if ($health->icon) {
                Storage::disk('public')->delete($health->icon);
            }
            $iconPath = $request->file('icon')->store('images/icons', 'public');
            $health->icon = $iconPath;
        }

        if ($request->file('image')) {
            if ($health->image) {
                Storage::disk('public')->delete($health->image);
            }
            $imagePath = $request->file('image')->store('images', 'public');
            $health->image = $imagePath;
        }

        $health->update([
            'title' => $request->title,
            'description' => $request->description,
            'icon' => $health->icon,
            'image' => $health->image,
        ]);

        return redirect()->route('healths.index')->with('success', 'Health updated successfully.');
    }

    public function destroyHealth(Health $health)
    {
        if ($health->icon) {
            Storage::disk('public')->delete($health->icon);
        }
        if ($health->image) {
            Storage::disk('public')->delete($health->image);
        }

        $health->delete();
        return redirect()->route('healths.index')->with('success', 'Health deleted successfully.');
    }
}
