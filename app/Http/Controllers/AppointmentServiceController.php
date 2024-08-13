<?php

namespace App\Http\Controllers;
use App\Models\AppointmentService;
use App\Models\ServicesCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AppointmentServiceController extends Controller
{
    public function index()
    {
        $services = AppointmentService::with('serviceCategory')->paginate(10);
        $totalServices = AppointmentService::count(); // Get the total count of blogs

        return view('front.services-appoinment.appointment_services.index', compact('services','totalServices'),[
            'page_title' => 'Appointment Services'
        ]);
    }

    public function create()
    {
        $categories = ServicesCategory::with('subcategories')->whereNull('parent_id')->get();
        return view('front.services-appoinment.appointment_services.create', compact('categories'),[
            'page_title' => 'Create Appointment Service'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_name' => 'required|string|max:255',
            'duration' => 'required|integer',
            'amount' => 'required|numeric',
            'service_category_id' => 'required|exists:services_categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('images', 'public') : null;

        AppointmentService::create([
            'service_name' => $request->service_name,
            'duration' => $request->duration,
            'amount' => $request->amount,
            'service_category_id' => $request->service_category_id,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->route('appointment-services.index')->with('success', 'Service created successfully.');
    }

    public function update(Request $request, AppointmentService $service)
    {
        $request->validate([
            'service_name' => 'required|string|max:255',
            'duration' => 'required|integer',
            'amount' => 'required|numeric',
            'service_category_id' => 'required|exists:services_categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
        ]);

        if ($request->file('image')) {
            if ($service->image) {
                Storage::disk('public')->delete($service->image);
            }
            $imagePath = $request->file('image')->store('images', 'public');
            $service->image = $imagePath;
        }

        $service->update([
            'service_name' => $request->service_name,
            'duration' => $request->duration,
            'amount' => $request->amount,
            'service_category_id' => $request->service_category_id,
            'description' => $request->description,
        ]);

        return redirect()->route('appointment-services.index')->with('success', 'Service updated successfully.');
    }
        public function edit(AppointmentService $service)
{
    $categories = ServicesCategory::with('subcategories')->whereNull('parent_id')->get();
    return view('front.services-appoinment.appointment_services.edit', compact('service', 'categories'),[
        'page_title' => 'Edit Appointment Service'
    ]);
}

    public function destroy(AppointmentService $service)
    {
        $service->delete();
        return redirect()->route('appointment-services.index')->with('success', 'Service deleted successfully.');
    }
}
