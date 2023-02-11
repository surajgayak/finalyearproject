<?php

namespace App\Http\Controllers;
use App\Models\Upload;
use App\Models\Booking;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking(Request $request){

      $bookings=Booking::where('user_id', auth()->user()->id)->get();
        return view('booking',compact('bookings'));

    }
    public function bookings(Request $request ,$id){
        $veh=Upload::find($id);
        $books=new Booking;
        $books->name=$veh->name;
        $books->date=$request['date'];
        $books->user_id=auth()->user()->id;
        $books->time=$request['time'];
        $books->location=$request['location'];
        $books->image=$veh->image;
        $books->status=$veh->id;
        $books->save();
        return redirect()->route('booking');
      
    }
    public function deletebooking($id){
        Booking::destroy($id);
        return redirect('/booking')->with('status','Booking has been cancelled');
    }
}