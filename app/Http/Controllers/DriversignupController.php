<?php

namespace App\Http\Controllers;
use App\Models\Driversignup;
use Illuminate\Http\Request;
use App\Models\Upload;

class DriversignupController extends Controller
{
    public function driversignup(){
        return view('driversignup');
    }

    public function createdriver(Request $request){
       
        $vehicles =Upload::all();
        $driversignup = new Driversignup;
        $driversignup->fullname=$request['fullname'];
        $driversignup->contact=$request['contact'];
        $driversignup->email=$request['email'];
        $driversignup->password=$request['password'];
        $random = mt_rand(10000000,99999999);
        $driversignup->image=$request['photo']->store('uploadimages',$random.'.jpg');
        $driversignup->licence=$request['licence']->store('licence',$random.'.jpg');
        $driversignup->save(); 
        return view('dashboard', compact('vehicles'));

    }
    
}