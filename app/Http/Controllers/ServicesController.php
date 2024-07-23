<?php

namespace App\Http\Controllers;

use App\Models\Massage;
use App\Models\ServicesTitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{

    public function index(Request $request)
    {

        $services = Massage::orderBy('created_at', 'desc')->paginate(10);
        // $services = Massage::all();
        $totalServices = Massage::count(); // Get the total count of blogs

        $servicesTitles = ServicesTitle::all();
        return view('front.pages.our-services.index', [
            'services' => $services,
            'totalServices' => $totalServices,
            'servicesTitles' => $servicesTitles,
            'page_title' => 'Services',


        ]);
    }

    // Create service
    public function create()
    {
        return view('front.pages.our-services.create', [
            'page_title' => 'Create Service',
            'service' => new Massage()

        ]);
    }

    // Store service
    // Store service
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
        $imagePath = $request->file('image')->store('servicesImage', 'public');
    }

    $service = Massage::create([
        'title' => $request->title,
        'short_description' => $request->short_description,
        'image' => $imagePath,
        'long_description' => $request->long_description,
    ]);

    return redirect()->route('our-services.index')->with('success', 'Service created successfully.');
}

    // Edit service
    public function edit(Massage $service)
    {
        return view('front.pages.our-services.edit', [
            'service' => $service,
            'page_title' => 'Update Service'
        ]);
    }

    // Update service
    public function update(Request $request, Massage $service)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'long_description' => 'required|string',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($service->image) {
                Storage::disk('public')->delete($service->image);
            }
            $data['image'] = $request->file('image')->store('servicesImage', 'public');
        }

        $service->update($data);

        return redirect()->route('our-services.index')->with('success', 'Service updated successfully.');
    }

    // Destroy service
    public function destroy(Massage $service)
    {
        if ($service->image) {
            Storage::disk('public')->delete($service->image);
        }

        $service->delete();

        return redirect()->route('our-services.index')->with('success', 'Service deleted successfully.');
    }

    // Create service title
    public function createTitle()
    {
        return view('front.pages.our-services.titlecreate', [
            'page_title' => 'Create Service Title'
        ]);
    }

    // Store service title
    public function storeTitle(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'long_description' => 'required|string',
        ]);

        ServicesTitle::create([
            'title' => $request->title,
            'long_description' => $request->long_description,
        ]);

        return redirect()->route('our-services.index')->with('success', 'Service Title created successfully.');
    }

    // Edit service title
    public function editTitle(ServicesTitle $servicesTitle)
    {
        return view('front.pages.our-services.titleedit', [
            'servicesTitle' => $servicesTitle,
            'page_title' => 'Update Service Title'
        ]);
    }

    // Update service title
    public function updateTitle(Request $request, ServicesTitle $servicesTitle)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'long_description' => 'required|string',
        ]);

        $servicesTitle->update($request->all());

        return redirect()->route('our-services.index')->with('success', 'Service Title updated successfully.');
    }

    // Destroy service title
    public function destroyTitle(ServicesTitle $servicesTitle)
    {
        $servicesTitle->delete();

        return redirect()->route('our-services.index')->with('success', 'Service Title deleted successfully.');
    }
}