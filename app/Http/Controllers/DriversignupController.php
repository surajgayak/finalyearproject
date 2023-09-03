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
            'contact' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:driversignup',
            'photo' => 'required|image|max:4096',
        ]);

        $driversignup = new Driversignup;
        $driversignup->fullname = $request['fullname'];
        $driversignup->contact = $request['contact'];
        $driversignup->email = $request['email'];
        $driversignup->password = bcrypt($request['password']);
        $driversignup->image = $request->file('photo')->store('uploadimages', 'public');
        $driversignup->licence = $request->file('licence')->store('uploadimages', 'public');
        $driversignup->save();
        return redirect()->route('home')->with('status', 'your request has been received.email will be sent after vefification.');
    }
}
