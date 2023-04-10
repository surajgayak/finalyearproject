<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Getrent;


class GetrentController extends Controller
{
    public function getrent(Request $request)
    {


        $request->validate([
            'username' => 'required|regex:/^[a-zA-Z\s]+$/',
            'contact' => 'required|digits:10',
            'carname' => 'required|min:5|max:255',
        ]);

        $getrent = new Getrent;
        $getrent->username = $request['username'];
        $getrent->email = $request['email'];
        $getrent->contact = $request['contact'];
        $getrent->carname = $request['carname'];
        $getrent->model = $request['model'];
        $getrent->carphoto = $request->file('carphoto')->store('uploadimages', 'public');
        $getrent->bluebookphoto = $request->file('bluebookphoto')->store('uploadimages', 'public');
        $getrent->save();
        return redirect()->route('home')->with('status', 'Your request has been registerd,You will be informed through email.');
    }
}
