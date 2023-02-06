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
       
        $driversignup = new Driversignup;
        $driversignup->fullname=$request['fullname'];
        $driversignup->contact=$request['contact'];
        $driversignup->email=$request['email'];
        $driversignup->password=$request['password'];
        $driversignup->image=$request->file('photo')->store('uploadimages', 'public');
        $driversignup->licence=$request->file('licence')->store('uploadimages', 'public');
        $driversignup->save(); 
        
        return redirect('/');
    }
    
}