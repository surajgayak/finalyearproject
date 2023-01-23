@extends('components.boilerplate')

@section('content')
<h1 class='pt-36 text-center text-4xl pb-8' ><< <span>Service</span> Section >> </h1>
<div class="service">
    <div class="miniservice">
        <div class="servicecard">
            <div class="icon">
                <i class="fa-solid fa-lightbulb"></i>
                                    </div>
            <h1 class="text-center text-xl">Emergency</h1>
            <p class="px-5 py-2">During Emergency case a users can give a notification directly to the company
                .A admin can handel and manage it with in a proper time.
            </p>
        </div>
        <div class="servicecard">
            <div class="icon">
                <i class="fa-solid fa-screwdriver-wrench"></i>

            </div>
            <h1 class="text-center text-xl">Mentainance</h1>
            <p class="px-5 py-2">Vehicle mentainane is done properly so any problem may not aries due to poor 
                condition of the vehicle.
            </p>

        </div>
        <div class="servicecard">
            <div class="icon">
                <i class="fa-solid fa-sack-dollar"></i>
                        </div>
            <h1 class="text-center text-xl">Insurance</h1>
            <p class="px-5 py-2">Insurance of both the vehicel and the driver is done so that any dmage may not harm the 
                life of both vehicles and the drivers.
            </p>

        </div>
        <div class="servicecard">
            <div class="icon">
                <i class="fa-solid fa-circle-exclamation"></i>
                        </div>
            <h1 class="text-center text-xl">Problem</h1>
            <p class="px-5 py-2">Problem during the phases of enjoyment can ruin whole enjoyment.</p>

        </div>
        <div class="servicecard">
            <div class="icon">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <h1 class="text-center text-xl">Cancelation</h1>
            <p class="px-5 py-2">Users can book a vehicle and cancel at the last moment too if the requirement is not 
                fullfill .
            </p>

        </div>
        <div class="servicecard">
            <div class="icon">
                <i class="fa-sharp fa-solid fa-location-dot"></i>
            </div>
            <h1 class="text-center text-xl">Destination</h1>
            <p class="px-5 py-2">A vehicle is tracked to the destination and its exact location.Any problem
                can be easily access and help in a proper time.
            </p>

        </div>

    </div>
</div>
@endsection