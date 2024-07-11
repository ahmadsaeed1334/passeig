<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Massage;
class HomeController extends Controller
{
    public function index()
    {
        $services = Massage::all();
        $appointments = Appointment::all();

        return view('front.home-page', [
            'services' => $services,
            'appointments' => $appointments,
            'page_title'=>'Home'
        ]);
    }
}
