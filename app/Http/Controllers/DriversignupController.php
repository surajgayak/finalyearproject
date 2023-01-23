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
        $driversignup = new Driversignup;
        $driversignup->fullname=$request['fullname'];
        $driversignup->contact=$request['contact'];
        $driversignup->email=$request['email'];
        $driversignup->password=md5($request['password']);
        $driversignup->image=$request['photo']->store('uploadimages');
        $driversignup->licence=$request['licence']->store('licence');
        $driversignup->bluebook=$request['bluebook']->store('bluebook');
        $driversignup->save(); 
        
        $vehicles = \App\Models\Upload::all();
        return view('dashboard', compact('vehicles'));

    }
    
}