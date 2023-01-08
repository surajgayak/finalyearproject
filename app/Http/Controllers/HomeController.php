<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $vehicles = \App\Models\Upload::all();

        return view('dashboard', compact('vehicles'));
    }
}