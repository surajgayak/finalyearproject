@extends('components.boilerplate')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style/style.css">
        <title>Document</title>
        <script>
            function removeAlert(alertElement) {
                alertElement.remove();
            }
            </script>
</head>
<body>
    
    @section('content')
    @if (session()->has('status')){
      
        <div class=" relative mt-24  mb-3 text-center w-6/12 m-auto text-xl text-white alert bg-green-400 rounded-lg py-5 px-6 " role="alert">
            {{session('status')}}
            <button class="absolute right-5 top-3 text-2xl font-bold text-white" onclick="removeAlert(this.parentNode)">x</button>
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
                        <img src="{{asset('./storage/' . $boo->image)}}" alt="Car Img">
                    </div>
                    <div class="text">
                        <h1 class="font-bold text-3xl">{{ucfirst($boo->name)}}</h1>
                        <br>
                        <p class="pt-1 text-xl text-gray-400">PickUp Date: {{ $boo->date }}<br></p>
                        <p class="pt-1 text-xl text-gray-400">Drop Date: {{ $boo->dropdate }}<br></p>

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
