<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Upload;
// use App\Models\Vehicle;
use App\Models\Booking;




class SeevehicleController extends Controller
{
    public function seevehicle($id){
        // $vehs=Vehicle::all();
        $bok = Booking::all();
        $see=Upload::find($id);
        return view('seevehicle',compact('see','bok'));
    }
}