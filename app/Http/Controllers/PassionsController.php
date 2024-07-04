<?php

namespace App\Http\Controllers;

use App\Models\Passion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PassionsController extends Controller
{

    public function index()
    {
        $passions  = Passion::all();
        return view('front.pages.passions.index',[
            'passions' => $passions,
        'page_title'=>'Our Passion']);
    }

    public function create()
    {
        return view('front.pages.passions.create',[
        'page_title'=>'Create Our Passion']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'long_description' => 'required|string',
        ]);


        Passion::create([
            'title' => $request->title,
            'long_description' => $request->long_description,
        ]);

        return redirect()->route('passions.index')->with('success', 'Passion created successfully.');
    }

    public function edit(Passion  $passion)
    {
        return view('front.pages.passions.edit',[
            'passion'=> $passion,
        'page_title'=>'Update Our Passions']
    );
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'long_description' => 'required|string',
        ]);

        $passion = Passion::findOrFail($id);
        $data = $request->all();



        $passion->update($data);

        return redirect()->route('passions.index')->with('success', 'Passions updated successfully.');
    }

    public function destroy($id)    {
        $passion = Passion::findOrFail($id);


        $passion->delete();

        return redirect()->route('passions.index')->with('success', 'Passions deleted successfully.');
    }
}
