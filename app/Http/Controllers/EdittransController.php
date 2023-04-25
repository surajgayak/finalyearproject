<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;

class EdittransController extends Controller
{

    public function edittrans($id)
    {
        $veh = Upload::find($id);
        return view('edittrans', compact('veh'));
    }
}
