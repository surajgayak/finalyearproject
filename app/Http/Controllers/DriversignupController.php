<?php

namespace App\Http\Controllers;

use App\Models\Driversignup;
use Illuminate\Http\Request;
use App\Models\Upload;

class DriversignupController extends Controller
{
    public function driversignup()
    {
        return view('driversignup');
    }

    public function createdriver(Request $request)
    {

        $request->validate([
            'username' => 'required|regex:/^[a-zA-Z\s]+$/',
            'contact' => 'required|digits:10',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);


        $driversignup = new Driversignup;
        $driversignup->fullname = $request['fullname'];
        $driversignup->contact = $request['contact'];
        $driversignup->email = $request['email'];
        $driversignup->password = $request['password'];
        $driversignup->image = $request->file('photo')->store('uploadimages', 'public');
        $driversignup->licence = $request->file('licence')->store('uploadimages', 'public');
        $driversignup->save();
        return redirect()->route('home')->with('status', 'your mail has been received.You will be notified after vefification.');
    }
}
