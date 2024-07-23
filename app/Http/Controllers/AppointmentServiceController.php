<?php

namespace App\Http\Controllers;
use App\Models\AppointmentService;
use App\Models\ServicesCategory;
use Illuminate\Http\Request;

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
        ]);

        AppointmentService::create([
            'service_name' => $request->service_name,
            'duration' => $request->duration,
            'amount' => $request->amount,
            'service_category_id' => $request->service_category_id,
        ]);

        return redirect()->route('appointment-services.index')->with('success', 'Service created successfully.');
    }

    public function edit(AppointmentService $service)
{
    $categories = ServicesCategory::with('subcategories')->whereNull('parent_id')->get();
    return view('front.services-appoinment.appointment_services.edit', compact('service', 'categories'),[
        'page_title' => 'Edit Appointment Service'
    ]);
}
    public function update(Request $request, AppointmentService $service)
    {
        $request->validate([
            'service_name' => 'required|string|max:255',
            'duration' => 'required|integer',
            'amount' => 'required|numeric',
            'service_category_id' => 'required|exists:services_categories,id',
        ]);

        $service->update([
            'service_name' => $request->service_name,
            'duration' => $request->duration,
            'amount' => $request->amount,
            'service_category_id' => $request->service_category_id,
        ]);

        return redirect()->route('appointment-services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(AppointmentService $service)
    {
        $service->delete();
        return redirect()->route('appointment-services.index')->with('success', 'Service deleted successfully.');
    }
}
