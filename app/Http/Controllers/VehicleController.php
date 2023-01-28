<?php

namespace App\Http\Controllers;
use App\Models\Upcomming;
use Illuminate\Http\Request;


class VehicleController extends Controller
{
    public function vehicle(){
        $upcomes=Upcomming::all();
        return view('vehicle',compact('upcomes'));
    }

}