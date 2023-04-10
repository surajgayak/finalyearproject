<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Upload;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $pickup = $request->input('pickup');
        $date = $request->input('date');
        $time = $request->input('time');

        $results = Upload::all()->take(3)->reverse();

        return view('search-result', ['results' => $results]);
    }
}
