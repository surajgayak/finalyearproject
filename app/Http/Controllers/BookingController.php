<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use App\Models\Booking;
use App\Models\Vehicle;
use Illuminate\Http\Request;


class BookingController extends Controller
{
    public function booking(Request $request)
    {

        $bookings = [];
        if (auth()->user()) {
            $bookings = Booking::where('user_id', auth()->user()->id)->get();
        }

        return view('booking', compact('bookings'));
    }

    public function deletebooking($id)
    {
        Booking::destroy($id);
        return redirect('/booking')->with('status', 'Booking has been cancelled');
    }
}
