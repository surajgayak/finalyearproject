<?php

namespace App\Http\Controllers;

use App\Models\Upcomming;
use App\Models\Booking;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class VehicleController extends Controller
{
    public function vehicle()
    {
        $vehs = Vehicle::all();
        $upcomes = Upcomming::all();
        $bok = Booking::all();
        return view('vehicle', compact('upcomes', 'vehs', 'bok'));
    }
}
