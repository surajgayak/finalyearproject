@extends('components.boilerplate')

@section('content')


    
<div class="description pt-24 ">
    <h1 class="text-center text-4xl pt-12 font-bold"><< Vehicles<span class="text-red-600"> Description</span>  >></h1>
</div>
<div class="cardetail">
    <h2 class="text-3xl font-bold underline"> Available Vehicles</h2>
    <button> Comming Soon
        <div class="triangle"></div>
    </button>
</div>
<div class="mainsection">

    <div class="desc">
       
        @foreach($vehicle as $veh)
       <form action="{{route('vehicledescs',$veh->id)}}" method="POST" >
        @csrf
        <div class="desc1 ">
            <div class="imgsrc">
                <img src="{{asset('storage/' . $veh->image)}}">
            </div>
            <div class="imgdesc">
                <h1>{{ucfirst($veh->name)}}</h1>   
                <p class="py-2">{{ucfirst($veh->description)}}</p>            
                <h3 class="py-2">{{ucfirst($veh->price_day)}}/day</h3>
                <div class="icons">
                    <div class="i1 i">
                        <i class="fa-solid fa-user"></i> &nbsp {{$veh->seat}} Seat
                    </div>
                    <div class="i2 i"><i class="fa-solid fa-car"></i> &nbsp {{$veh->engine}} Engine
                    </div>
                    <div class="i3 i"><i class="fa-regular fa-calendar-days"></i>&nbsp {{$veh->model}} Model</div>
                </div>
                
                {{-- <a href="}}"><button class="text-white bg-blue-500 rounded p-2" >Book Now</button></a> --}}
                <input type="submit" value="Book Now" class="text-white bg-blue-500 rounded p-2 mt-3 cursor-pointer">
            </div>

        </div>
    </form>
    @endforeach

        <br>
    </div>
    <br>

    {{-- LATEST vehicleicles --}}
    <div class="latest">
        @foreach ($upcomes as $upcome)
            
        <div class="minilatest">
            <div class="imgsec">
                <img src="{{asset('storage/' . $upcome->image)}}">
            </div>
            <div class="textsection">
                <h1 class="text-xl">{{ucfirst($upcome->name)}}</h1>
                <p>{{ucfirst($upcome->desc)}}</p>
                
            </div>
        </div> 
        @endforeach
    </div>
</div>
@endsection