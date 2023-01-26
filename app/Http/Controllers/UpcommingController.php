<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Upcomming;

class UpcommingController extends Controller
{
   public function upcommingdate(Request $request){
    $upcomes=Upcomming::all();
    return view('vehicle',compact('upcomes'));
   }
    
}