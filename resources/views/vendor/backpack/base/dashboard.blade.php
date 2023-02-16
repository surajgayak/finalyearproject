@extends(backpack_view('blank'))

{{-- @php
    if (config('backpack.base.show_getting_started')) {
        $widgets['before_content'][] = [
            'type'        => 'view',
            'view'        => 'backpack::inc.getting_started',
        ];
    } else {
        $widgets['before_content'][] = [
            'type'        => 'jumbotron',
            'heading'     => trans('backpack::base.welcome'),
            'content'     => trans('backpack::base.use_sidebar'),
            'button_link' => backpack_url('logout'),
            'button_text' => trans('backpack::base.logout'),
        ];
    }
@endphp --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style/style.css">
    <title>Document</title>
</head>
<body>
    @section('content')
<div class="dashboardcontent">

    <div class="widgets">
        <div class="one u">
            <h1 class="text-center text-white "> Users</h1>
            <hr>
            <br>
            <p class="text-center text-white  ">
                {{DB::table("users")->count();}}

            </p>
        </div>
        <div class="one v">
            <h1 class="text-center text-white "> Drivers</h1>
                        <hr>
                        <br>

            <p class="text-center text-white">
            {{DB::table("driversignup")->count();}}

            </p>
        </div>
        <div class="one i">
            <h1 class="text-center text-white "> Vehicles</h1>
                        <hr>
                        <br>

            <p class="text-center text-white">
            {{DB::table("upload")->count();}}

            </p>
        </div>
        <div class="one e">
            <h1 class="text-center text-white "> Enquiries</h1>
                        <hr>
                        <br>

            <p class="text-center text-white">
            {{DB::table("contact_enquiries")->count();}}

            </p>
        </div>
        <div class="one d">
            <h1 class="text-center text-white "> Insurance</h1>
                        <hr>
                        <br>

            <p class="text-center text-white">
           {{ DB::table("insurances")->count();}}

            </p>
        </div>
        <div class="one inc">
            <h1 class="text-center text-white "> Booking</h1>
                        <hr>
                        <br>

            <p class="text-center text-white">
           {{ DB::table("bookings")->count();}}

            </p>
        </div>
    </div>
</div>
@endsection
</body>
</html>


{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    hello world
</body>
</html> --}} 