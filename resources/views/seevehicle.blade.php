<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style/style.css">
    <title>Document</title>
</head>

<body class="bg-blue-50">
    <x-app-layout>
    </x-app-layout>
    <h1 class="pt-32 text-4xl text-center font-bold">
        <<<span>Desc</span>ription >>
    </h1>
    <br>
    <form action="{{ route('vehicledescs', $see->id) }}" method="post">
        @csrf
        <div class="seevehicle">
            <div class="miniseevehicle">
                <img src="{{ asset('storage/' . $see->image) }}">
            </div>
            <br>
            <hr>
            <div class="miniseedesc text-xl text-gray-500">
                <div class="text">
                    <h1>Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <b>{{ ucfirst($see->name) }}</b></h1><br>
                    <h1>Price/day&nbsp&nbsp&nbsp&nbsp: Rs. {{ ucfirst($see->price_day) }}</h1><br>
                    <h1>Engine &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: {{ ucfirst($see->engine) }}</h1><br>
                    <h1>Model &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: {{ ucfirst($see->model) }}</h1><br>
                    <h1>Fuel &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:
                        {{ ucfirst($see->engine) }}</h1><br>
                    <h1>Seat &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: {{ ucfirst($see->seat) }}
                    </h1>
                </div>
                <div class="descript">
                    {{ ucfirst($see->description) }}<br><br>
                </div>
                {{--  --}}


                @if (count($bok) == 0)
                    <!-- If there are no bookings, show the "Book Now" button -->
                    <input type="submit" value="Book Now"
                        class="text-white bg-blue-500 rounded p-2 mt-3 cursor-pointer">
                @else
                    @foreach ($bok as $books)
                        @if ($books->status == $see->id)
                            <!-- If the vehicle is booked, disable the submit button -->
                            <input type="submit" value="Book Now"
                                class="text-white bg-blue-500 rounded p-2 mt-3 cursor-pointer">
                        @break
                    @endif
                @endforeach
                @if ($books->status != $see->id)
                    <!-- If the vehicle is available, enable the submit button -->
                    <input type="submit" value="Book Now"
                        class="text-white bg-blue-500 rounded p-2 mt-3 cursor-pointer">
                @endif
            @endif

            {{--  --}}
        </div>
        <hr>

    </div>
</form>
<x-footer>
</x-footer>
</body>

</html>
