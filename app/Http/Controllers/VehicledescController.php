<?php

namespace App\Http\Controllers;
use App\Models\Upload;
use App\Models\Booking;

use Illuminate\Http\Request;

class VehicledescController extends Controller
{
    public function vehicledesc(){
        return view('vehicledesc');
        
    }
   public function vehicledescs($id){
    $bok=Booking::all();
    $veh=Upload::find($id);
    return view('vehicledesc',compact('veh','bok'));
   }
}