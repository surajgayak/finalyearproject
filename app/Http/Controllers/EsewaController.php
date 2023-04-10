<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Upload;
use Carbon\Carbon;
use App\Mail\BookingConfirmation;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
// init composer autoloader.
require '../vendor/autoload.php';

use Cixware\Esewa\Client;
use Cixware\Esewa\Config;

class EsewaController extends Controller
{

        public function esewa(Request $request, $id)
        {
                $booking = new Booking;
                $pid = uniqid();

                $veh = Upload::find($id);
                $veh_id = $veh->id;
                $books = new Booking;
                $books->name = $veh->name;
                $books->date = $request['date'];
                $books->dropdate = $request['dropdate'];
                $books->user_id = auth()->user()->id;
                $books->user_email = auth()->user()->email;
                $books->veh_uniq_id = $pid;

                $books->time = $request['time'];
                $books->location = $request['location'];
                $books->image = $veh->image;
                $books->status = $veh->id;

                $pickupdate = Carbon::parse($books->date);
                $dropdate = Carbon::parse($books->dropdate);

                $days = $dropdate->diffInDays($pickupdate);


                $books->amount = ($veh->price_day) * $days;
                $books->bok_status = 'unverified';
                $books->save();


                $successUrl = url('/success');
                $failureUrl = url('/failure');

                $config = new Config($successUrl, $failureUrl);
                $esewa = new Client($config);
                $esewa->process($pid, $books->amount, 0, 0, 0);

                Mail::to(auth()->user()->email)->send(new BookingConfirmation($booking));

                // return redirect()->route('booking')->with('status','Booking has been added !!!');

        }

        public function esewaRe(Request $request, $id)
        {
                $book = Booking::find($id);
                $pid = uniqid();
                $book->veh_uniq_id = $pid;
                $book->save();

                $successUrl = url('/success');
                $failureUrl = url('/failure');

                $config = new Config($successUrl, $failureUrl);
                $esewa = new Client($config);
                $esewa->process($pid, $book->amount, 0);

                // return redirect()->route('booking')->with('status','Booking has been added !!!');

        }

        public function esewasuccess()
        {
                $veh_uniq_id = $_GET['oid'];
                $refid = $_GET['refId'];
                $amount = $_GET['amt'];

                $book = Booking::where('veh_uniq_id', $veh_uniq_id)->first();
                $update_status = Booking::find($book->id)->update([
                        'bok_status' => 'verified'
                ]);

                if ($update_status) {
                        return redirect()->route('booking')->with('status', 'Booking has been added !!!');
                }
        }


        public function esewafailure()
        {
                return redirect()->route('booking')->with('status', 'Booking has been failed !!!');
        }
}
