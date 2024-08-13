<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Massage;
use App\Models\Partner;
use App\Models\AboutUs;
class HomeController extends Controller
{
    
        public function index()
    {
        $services = Massage::all();
        $singleService = $services->shift(); // Get the first service and remove it from the collection
        $appointments = Appointment::all();
        $partners = Partner::all();
        $abouts = AboutUs::all();;

        return view('front.home-page', [
            'singleService' => $singleService,
            'services' => $services,
            'appointments' => $appointments,
            'partners' => $partners,
            'abouts' => $abouts,
            'page_title' => 'Home'
        ]);
    }

}
