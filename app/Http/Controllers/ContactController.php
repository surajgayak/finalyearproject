<?php

namespace App\Http\Controllers;

use App\Models\ContactEnquiry;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function enquirycontact(Request $request)
    {
        $info = new ContactEnquiry;
        $info->name = $request['name'];
        $info->email = $request['email'];
        $info->contact = $request['contact'];
        $info->message = $request['message'];
        $info->save();
        return redirect('contact')->with('status', 'Enquiry has been send');
    }
}
