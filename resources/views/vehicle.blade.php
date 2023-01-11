@extends('components.boilerplate')

@section('content')
<div class="description pt-24 ">
    <h1 class="text-center text-4xl pt-12 "><< <span class="text-red-600">Vehicle</span> Description >></h1>
</div>
<div class="cardetail">
    <h2 class="text-4xl font-bold">Vehicle Detail</h2>
    <button> Latest Cars
        <div class="triangle"></div>
    </button>
</div>
<div class="mainsection">

    <div class="desc">
        @foreach($vehicles as $vehicle)  

        <div class="desc1 ">

            <div class="imgsrc">
                <img src="
                {{$vehicle->image}}">
            </div>
            <div class="imgdesc">
                <h1>{{$vehicle->title}}</h1>   
                <p class="py-2">{{$vehicle->desc}}</p>            
                <h3 class="py-2">{{$vehicle->price_day}}</h3>
                <div class="icons">
                    <div class="i1 i">
                        <i class="fa-solid fa-user"></i> &nbsp {{$vehicle->seat}} Seat
                    </div>
                    <div class="i2 i"><i class="fa-solid fa-car"></i> &nbsp {{$vehicle->engine}} Engine
                    </div>
                    <div class="i3 i"><i class="fa-regular fa-calendar-days"></i>&nbsp{{$vehicle->model}} Model</div>
                </div>
                <button class="text-white bg-blue-500 rounded p-2">Book Now</button>
            </div>

        </div>
        @endforeach

        {{--  --}}
        <br>
        
      

{{--  --}}
        <br>
       
    </div>

    <br>

    {{-- LATEST vehicleicles --}}
    <div class="latest">
        <div class="minilatest">
            <div class="imgsec">
                <img src="/images/c1.jpg">
            </div>
            <div class="textsection">
                <h1>Lamborgini</h1>
                <p>Rs 10000/day</p>
                <i class="fa-solid fa-user py-3"></i> &nbsp 2 Seat
            </div>
        </div>
        {{--  --}}
        
        <div class="minilatest">
            <div class="imgsec">
                <img src="/images/c1.jpg">
            </div>
            <div class="textsection">
                <h1>Lamborgini</h1>
                <p>Rs 10000/day</p>
                <i class="fa-solid fa-user py-3"></i> &nbsp 2 Seat
            </div>
        </div>
        {{--  --}}
        <div class="minilatest">
            <div class="imgsec">
                <img src="/images/c1.jpg">
            </div>
            <div class="textsection">
                <h1>Lamborgini</h1>
                <p>Rs 10000/day</p>
                <i class="fa-solid fa-user py-3"></i> &nbsp 2 Seat
            </div>
        </div>

        <div class="minilatest">
            <div class="imgsec">
                <img src="/images/c1.jpg">
            </div>
            <div class="textsection">
                <h1>Lamborgini</h1>
                <p>Rs 10000/day</p>
                <i class="fa-solid fa-user py-3"></i> &nbsp 2 Seat
            </div>
        </div>


        {{--  --}}

    </div>
</div>
@endsection