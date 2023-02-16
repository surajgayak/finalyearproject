<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chartController extends Controller
{
    public function barchart(){
        return view('backpack::base.dashboard');

    }
}