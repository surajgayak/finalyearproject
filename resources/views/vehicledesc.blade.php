<x-app-layout>
</x-app-layout>

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



    <div class="contain">
        <h2 class="text-4xl text-center p-5 font-bold"><span>Vehicle Details</span></h2>
        <form action="{{ route('esewa', $veh->id) }}" method="post">
            @csrf
            <div class="car-info">
                <img src="{{ asset('storage/' . $veh->image) }}" alt="Car Image">
                <div class="descriptionss">
                    <h1 class="font-bold text-4xl">{{ ucfirst($veh->name) }}</h1>
                    <br>
                    <p>Price/Day :Rs.{{ $veh->price_day }}</p>
                    <p>Seat : {{ $veh->seat }}</p>
                    <p>Engine : {{ ucfirst($veh->engine) }}</p>
                    <p>Fuel : {{ ucfirst($veh->engine) }}</p>
                    <p>Model : {{ ucfirst($veh->model) }}</p>


                    {{-- @php
                        $user_id = Auth::id();
                        $min_pickup_date = \Carbon\Carbon::tomorrow()->format('Y-m-d'); 
                        $max_pickup_date = \Carbon\Carbon::now()
                            ->addDays(20)
                            ->format('Y-m-d');
                    @endphp

                    @foreach ($bok as $boks)
                    @endforeach

                    @error('date')
                    @enderror

                
                    Pickup Date
                    <input type="date" class="mt-3" name="date" min="{{ $min_pickup_date }}" required>
                    <br>
                    Drop Date
                    <input type="date" class="mt-3" name="dropdate" min="{{ $min_pickup_date }}" required>

                    <br> --}}

                    @php
                        $user_id = Auth::id();
                        $min_pickup_date = \Carbon\Carbon::tomorrow()->format('Y-m-d'); // set default minimum pickup date to tomorrow
                        $max_pickup_date = \Carbon\Carbon::now()
                            ->addDays(20)
                            ->format('Y-m-d'); // set default max pickup date to tomorrow
                        $latest_drop_date = null;
                        
                        // Check if there is already a booking made for the car
                        if ($bok->isNotEmpty()) {
                            $latest_booking = $bok
                                ->sortByDesc('dropdate')
                        
                                ->first();
                        
                            $latest_drop_date = $latest_booking->dropdate;
                            $min_pickup_date = \Carbon\Carbon::parse($latest_drop_date)
                                ->addDay()
                                ->format('Y-m-d');
                        }
                    @endphp

                    @foreach ($bok as $boks)
                        {{-- // Display existing bookings --}}
                    @endforeach

                    @error('date')
                        {{-- // Display error message --}}
                    @enderror

                    {{-- // Display pickup date input field --}}
                    Pickup Date
                    <input type="date" class="mt-3" name="date" min="{{ $min_pickup_date }}" required>
                    <br>

                    {{-- // Set the minimum drop date to be the pickup date selected by the user --}}
                    @if ($latest_drop_date)
                        <input type="hidden" name="mindropdate"
                            value="{{ \Carbon\Carbon::parse($min_pickup_date)->format('Y-m-d') }}">
                    @else
                        <input type="hidden" name="mindropdate" value="{{ $min_pickup_date }}">
                    @endif

                    {{-- // Display drop date input field --}}
                    Drop Date
                    <input type="date" class="mt-3" name="dropdate" min="{{ $min_pickup_date }}" required>


                    <input type="time" class="mt-2" name="time" required>
                    <input type="text" placeholder="pickup Location" class="mt-2" name="location" required>
                    <br>
                    <input value="100" name="tAmt" type="hidden">
                    <input value="90" name="amt" type="hidden">
                    <input value="5" name="txAmt" type="hidden">
                    <input value="2" name="psc" type="hidden">
                    <input value="3" name="pdc" type="hidden">
                    <input value="EPAYTEST" name="scd" type="hidden">
                    <input value="1234567890" name="pid" type="hidden">
                    <input value="http://esewa-test/esewa_payment_success?q=su" type="hidden" name="su">
                    <input value="http://esewa-test/esewa_payment_failed?q=fu" type="hidden" name="fu">
                    {{--  --}}
                    <input type="submit" class="rent-btn" value="Confirmed">
                    {{--  --}}
                </div>


            </div>
        </form>

        <hr>
        <div class="featuress">
            <div class="feat">
                <h4>Features</h4>
                <ul>
                    <li>Air conditioning</li>
                    <li>Bluetooth connectivity</li>
                    <li>Rearview camera</li>
                    <li>Leather seats</li>
                </ul>
            </div>
            <div class="descs">
                <br>
                {{ ucfirst($veh->description) }}
            </div>
        </div>
    </div>



</body>

</html>
