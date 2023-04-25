@extends('components.boilerplate')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
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
        @if (session()->has('status'))
            {

            <div class=" relative mt-24  mb-3 text-center w-6/12 m-auto text-xl text-white alert bg-green-400 rounded-lg py-5 px-6 "
                role="alert">
                {{ session('status') }}
                <button class="absolute right-5 top-3 text-2xl font-bold text-white"
                    onclick="removeAlert(this.parentNode)">x</button>
            </div>
            }
        @endif

        <h1 class='pt-32 text-center text-4xl font-bold'>
            << My<span> Bookings</span> >>
        </h1>
        <div class="booking">

            <div class="minibooking">
                @forelse ($bookings as $boo)
                    @if (strtotime($boo->dropdate) >= time())
                        <div class="book">
                            <div class="img">
                                <img src="{{ asset('./storage/' . $boo->image) }}" alt="Car Img">
                            </div>
                            <div class="text">
                                <h1 class="font-bold text-3xl">{{ ucfirst($boo->name) }}</h1>
                                <br>
                                <p class="pt-1 text-xl text-gray-400">PickUp Date: {{ $boo->date }}<br></p>
                                <p class="pt-1 text-xl text-gray-400">Drop Date: {{ $boo->dropdate }}<br></p>

                                <p class="pt-1 text-xl text-gray-400">Time: {{ $boo->time }}<br></p>
                                <p class="pt-1 text-xl text-gray-400">Pick Location: {{ $boo->location }}<br></p>


                                <br>

                            </div>
                            <br><br>
                            <div class="confirmed">
                                <form action="{{ route('deletebooking', $boo->id) }}" method="post">
                                    @csrf
                                    <input type="submit" value="Cancel" class="bg-blue-400 cancel"
                                        title="Cancellation at peak point due 5% charge."><br><br>
                                </form>

                                @if ($boo->bok_status == 'verified')
                                    <button class="bg-green-500 text-white" title="Booking has been confirmed"
                                        disabled>Confirmed</button>&nbsp;&nbsp;&nbsp;
                                    <form action="{{ route('edittrans', $boo->id) }}" method="post">
                                        @csrf
                                        <button class="text-blue-500 underline cursor-pointer">Edit</button>
                                    </form>
                                @else
                                    <button class="bg-yellow-200" title="Verify Transaction " disabled>Pending</button>
                                    <form action="{{ route('esewaRe', $boo->id) }}" method="post">
                                        @csrf
                                        <button class="mt-2 bg-green-200" title="Pay now" type="submit">Pay now</button>
                                    </form>
                                @endif

                            </div>

                        </div>

                        <br>
                    @endif
                @empty
                    <div class="text-center text-4xl font-bold text-red-500">No bookings at all.</div>
                @endforelse
            </div>
            <br>
        </div>
    @endsection
</body>

</html>
