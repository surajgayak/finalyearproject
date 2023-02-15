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
                <h3 class="py-2">Rs. {{ucfirst($veh->price_day)}}/day</h3>
                <div class="icons">
                    <div class="i1 i">
                        <i class="fa-solid fa-user"></i> &nbsp {{$veh->seat}} Seat
                    </div>
                    <div class="i2 i"><i class="fa-solid fa-car"></i> &nbsp {{$veh->engine}} Engine
                    </div>
                    <div class="i3 i"><i class="fa-regular fa-calendar-days"></i>&nbsp {{$veh->model}} Model</div>
                </div>
                
                

                {{-- <input type="submit" value="Book Now"  class="text-white bg-blue-500 rounded p-2 mt-3 cursor-pointer"> --}}

                {{-- @if(count($bok) > 0)
                @foreach ($bok as $books)
                    @if($books->status == $veh->id)
                    @if($books->user_id == Auth::check() && Auth::user()->id)
                    <!-- If the vehicle is booked by the current user, show the "Booked" button -->
                    <input type="submit" value="Booked" disabled class="text-white bg-blue-300 rounded p-2 mt-3 cursor-pointer">
                @endif
                @break
                    @endif
                @endforeach

                @if($books->status != $veh->id)
                    <!-- If the vehicle is available, enable the submit button -->
                    <input type="submit" value="Book Now" class="text-white bg-blue-500 rounded p-2 mt-3 cursor-pointer">
                @endif
            @endif
             --}}

             


          
{{--             
                @if (count($bok) > 0)
                @foreach ($bok as $book)
                    @if ($book->status == $veh->id)
                        @if (Auth::check() && $book->user_id == Auth::user()->id)
                            <!-- If the vehicle is booked by the current user, show the "Booked" button -->
                            <input type="submit" value="Booked" disabled class="text-white bg-blue-300 rounded p-2 mt-3 cursor-pointer">
                        @endif
                        @break
                    @endif

                    @if ($loop->last)
                        <!-- If we reached the end of the loop and the vehicle is not booked, show the "Book Now" button -->
                        <input type="submit" value="Book Now" class="text-white bg-blue-500 rounded p-2 mt-3 mt-3 cursor-pointer">
                    @endif
                @endforeach
            @else
                <!-- If there are no bookings, show the "Book Now" button -->
                <input type="submit" value="Book Now" class="text-white bg-blue-500 rounded p-2 mt-3 cursor-pointer">
            @endif --}}
            @php
            $booked = false;
        @endphp
        
        @foreach ($bok as $book)
            @if ($book->status == $veh->id)
                @if (Auth::check() && $book->user_id == Auth::user()->id)
                    <!-- If the vehicle is booked by the current user, show the "Booked" button -->
                    <input type="submit" value="Booked" disabled class="text-white bg-blue-300 rounded p-2 mt-3 cursor-pointer">
                    @php
                        $booked = true;
                    @endphp
                @else
                    <!-- If the vehicle is booked by another user, show a message -->
                    {{-- <p class="mt-3 text-gray-300">This vehicle is currently booked by another user but if you want to book you can. </p> --}}
                @endif
            @endif
        @endforeach
        
        @if (!$booked)
            <!-- If the vehicle is available, display the "Book Now" button -->
            <input type="submit" value="Book Now" class="text-white bg-blue-500 rounded p-2 mt-3 cursor-pointer">
        @endif
        

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