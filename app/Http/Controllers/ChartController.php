<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chartController extends Controller
{
    public function barchart(){
        return view('vendor\backpack\crud\src\resources\views\base\dashboard.blade.php');
    }
}