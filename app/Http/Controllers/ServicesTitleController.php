<?php

namespace App\Http\Controllers;

use App\Models\ServicesTitle;
use Illuminate\Http\Request;

class ServicesTitleController extends Controller
{
    public function index()
    {
        $servicesTitles  = ServicesTitle::all();
        return view('front.pages.our-services.index',[
            'servicesTitles' => $servicesTitles,
        'page_title'=>'Services']);
    }

    public function create()
    {
        return view('front.pages.our-services.titlecreate',[
        'page_title'=>'Create Services']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'long_description' => 'required|string',
        ]);


        ServicesTitle::create([
            'title' => $request->title,
            'long_description' => $request->long_description,
        ]);

        return redirect()->route('our-services.index')->with('success', 'Services Title created successfully.');
    }

    public function edit(ServicesTitle  $servicesTitle)
    {
        return view('front.pages.our-services.titleedit',[
            'servicesTitle'=> $servicesTitle,
        'page_title'=>'Update Our Services']
    );
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'long_description' => 'required|string',
        ]);

        $servicesTitle = ServicesTitle::findOrFail($id);
        $data = $request->all();



        $servicesTitle->update($data);

        return redirect()->route('our-services.index')->with('success', 'Services Title updated successfully.');
    }

    public function destroy($id)    {
        $servicesTitle = ServicesTitle::findOrFail($id);


        $servicesTitle->delete();

        return redirect()->route('our-services.index')->with('success', 'Services Title deleted successfully.');
    }
}
