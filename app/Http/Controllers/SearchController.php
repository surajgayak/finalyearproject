<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $pickup = $request->input('pickup');
        $date = $request->input('date');
        $time = $request->input('time');

        $query = Booking::query();
        if($pickup)
            $query->where('location', 'like', '%'.$pickup.'%');
        elseif($date)
            $query->where('date', 'like', '%'.$date.'%');
        elseif($time)
        $query->where('time', 'like', '%'.$time.'%');    
        $results = $query->get();

   
        return view('search-result', compact('results'));
    }
       
}