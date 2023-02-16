<?php

namespace App\Http\Controllers;
use App\Models\Upload;
use App\Models\Booking;
use Carbon\Carbon;


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

public function jesus(Request $request){
// Retrieve the car ID and user ID from the request
$veh_id = $request->input('veh_id');
$user_id = auth()->user()->id;

// Retrieve the most recent booking for the car, if there are any
$last_booking = Booking::where('veh_id', $veh_id)
    ->orderBy('dropdate', 'desc')
    ->first();

// Calculate the pickup date and minimum drop date for the new booking
if ($last_booking) {
    $pickup_date = Carbon::parse($last_booking->dropdate)->addDays(1);
    $min_dropdate = $pickup_date->format('Y-m-d');
} else {
    $pickup_date = Carbon::tomorrow();
    $min_dropdate = $pickup_date->format('Y-m-d');
}

// Render the form with the pickup and drop dates
return view('vehicledesc', [
    'pickup_date' => $pickup_date->format('Y-m-d'),
    'min_dropdate' => $min_dropdate,
]);
}

  
  
}