<?php

namespace App\Http\Controllers;
use App\Models\Footer;

use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $footers = Footer::all();
        return view('front.pages.footers.index',[
            'footers' => $footers,
        'page_title'=>'Footer']);
    }

    public function create()
    {
        return view('front.pages.footers.create',[
        'page_title'=>'Create Footer']);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'description' => 'required|string',
            'icons.*.icon' => 'nullable|string',
            'icons.*.link' => 'nullable|url',
            'working_hours' => 'required|string|max:255',
        ]);

        $data['icons'] = json_encode($request->icons);

        Footer::create($data);

        return redirect()->route('footer.index')->with('success', 'Footer created successfully.');
    }

    public function edit(Footer $footer)
    {
        return view('front.pages.footers.edit', [
            'footer' => $footer,
        'page_title'=>'Update Footer']);
    }

    public function update(Request $request, Footer $footer)
    {
        $data = $request->validate([
            'number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'description' => 'required|string',
            'icons.*.icon' => 'nullable|string',
            'icons.*.link' => 'nullable|url',
            'working_hours' => 'required|string|max:255',
        ]);

        $data['icons'] = json_encode($request->icons);

        $footer->update($data);

        return redirect()->route('footer.index')->with('success', 'Footer updated successfully.');
    }

    public function destroy(Footer $footer)
    {
        $footer->delete();

        return redirect()->route('footer.index')->with('success', 'Footer deleted successfully.');
    }
}
