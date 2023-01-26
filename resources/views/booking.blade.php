@extends('components.boilerplate')


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
    @if (session()->has('status')){
      
        <div class=" mt-24 text-center text-white alert bg-red-400 rounded-lg py-5 px-6  text-4xl" role="alert">
            {{session('status')}}
            <button type="button" class="btn-close box-content w-4 h-4 p-1 ml-auto text-yellow-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          
    }
    @endif



    
<h1 class='pt-36 text-center text-4xl font-bold'><< My<span> Bookings</span> >></h1>
<div class="booking">
    <div class="minibooking">
        @foreach ($bookings as $boo)
                <form action="{{route('deletebooking',$boo->id)}}" method="post">
                    @csrf
                <div class="book">
                    <div class="img">
                        <img src="{{asset('storage/' . $boo->image)}}">
                    </div>
                    <div class="text">
                        <h1 class="font-bold text-3xl">{{ucfirst($boo->name)}}</h1>
                        <br>
                        <p class="pt-1 text-xl text-gray-400">PickUp Date: {{ $boo->date }}<br></p>
                        <p class="pt-1 text-xl text-gray-400">Time: {{ $boo->time }}<br></p>
                        <p class="pt-1 text-xl text-gray-400">Pick Location: {{ $boo->location }}<br></p>


                        <br>

                    </div>
                    <br><br>
                    <div class="confirmed">
                        <input type="submit" value="Cancel" class="bg-blue-400">
                    </div>
                </div>
                <br>
            </form>
        @endforeach
    </div>
    <br>
</div>
@endsection
</body>
</html>
