<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();
        return view('front.pages.appointments.index', [
            'appointments' => $appointments,
            'page_title' => 'Appointments'
        ]);
    }

    public function create()
    {
        return view('front.pages.appointments.create', [
            'page_title' => 'Create Appointments'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'long_description' => 'required|string',
            'button' => 'required|string|max:255',
        ]);

        Appointment::create([
            'title' => $request->title,
            'long_description' => $request->long_description,
            'button' => $request->button,
        ]);

        return redirect()->route('appointments.index')->with('success', 'Appointment created successfully.');
    }

    public function edit(Appointment $appointment)
    {
        return view('front.pages.appointments.edit', [
            'appointment' => $appointment,
            'page_title' => 'Update Appointment'
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'long_description' => 'required|string',
            'button' => 'required|string|max:255',
        ]);

        $appointment = Appointment::findOrFail($id);
        $appointment->update($request->all());

        return redirect()->route('appointments.index')->with('success', 'Appointment updated successfully.');
    }

    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();

        return redirect()->route('appointments.index')->with('success', 'Appointment deleted successfully.');
    }
}
