<?php

namespace App\Http\Controllers;
use App\Models\Driversignup;
use Illuminate\Http\Request;

class DriversignupController extends Controller
{
    public function driversignup(){
        return view('driversignup');
    }

    public function createdriver(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $driversignup = new Driversignup;
        $driversignup->fullname=$request['fullname'];
        $driversignup->contact=$request['contact'];
        $driversignup->email=$request['email'];
        $driversignup->password=md5($request['password']);
        $random = mt_rand(10000000,99999999);
        $driversignup->image=$request['photo']->store('uploadimages',$random.'.jpg');
        $driversignup->licence=$request['licence']->store('licence',$random.'.jpg');
        $driversignup->save(); 
        $vehicles = \App\Models\Upload::all();
        return view('dashboard', compact('vehicles'));

    }
    
}