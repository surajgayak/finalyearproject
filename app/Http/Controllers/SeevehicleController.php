<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Upload;

class SeevehicleController extends Controller
{
    public function seevehicle($id){
        $see=Upload::find($id);
        return view('seevehicle',compact('see'));
    }
}