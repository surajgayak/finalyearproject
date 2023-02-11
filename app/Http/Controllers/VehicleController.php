<?php

namespace App\Http\Controllers;
use App\Models\Upcomming;
use App\Models\Booking;
use App\Models\Vehicle;
use Illuminate\Http\Request;


class VehicleController extends Controller
{
    public function vehicle(){
        $vehs=Vehicle::all();
        $upcomes=Upcomming::all();
        $bok = Booking::all();
        return view('vehicle', compact('upcomes', 'vehs','bok'));
        }

 }