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

        $totalVehicles = Upload::count(); // Get the total number of vehicles

        $minRecords = 0; // Minimum number of records to retrieve
        $maxRecords = $totalVehicles; // Maximum number of records to retrieve (same as total vehicles)

        $randomNumber = rand($minRecords, $maxRecords);

        if ($randomNumber == 0) {
            // No vehicles available
            $results = [];
            $message = "No vehicles available.";
        } else {
            $results = Upload::inRandomOrder()->take($randomNumber)->get();
            $message = "";
        }



        return view('search-result', ['results' => $results]);
    }
}
