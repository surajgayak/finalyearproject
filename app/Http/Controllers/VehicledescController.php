<?php

namespace App\Http\Controllers;
use App\Models\Upload;

use Illuminate\Http\Request;

class VehicledescController extends Controller
{
    public function vehicledesc(){
        return view('vehicledesc');
        
    }
   public function vehicledescs($id){
    $veh=Upload::find($id);
    return view('vehicledesc',compact('veh'));
    // return view('vehicledesc')->with('vehh',$veh);
   }
}