@extends('components.boilerplate')

@section('content')
<h1 class='pt-36 text-center text-3xl font-bold'><< My<span> Bookings</span> >></h1>

<div class="booking">
    <div class="minibooking">
        <div class="book">
            <div class="img">
                <img src="/images/audi.jpg">
            </div>
            <div class="text">
                <h1 class="font-bold text-2xl">Audi R8</h1>
                <p class="pt-1">From Date: 1/3/2023<br>
                To Date: 5/3/2023 
                </p>
                <br>
                <p>This is the one one of the best and the most important car.
                    No dought in performance and maintained properly.
                </p>
            </div>
            <div class="confirmed">
                <input type="submit" value="Confirmed">
            </div>
        </div>
<br>
        {{--  --}}
        <div class="book">
            <div class="img">
                <img src="/images/audi.jpg">
            </div>
            <div class="text">
                <h1 class="font-bold text-2xl">Audi R8</h1>
                <p class="pt-1">From Date: 1/3/2023<br>
                To Date: 5/3/2023 
                </p>
                <br>
                <p>This is the one one of the best and the most important car.
                    No dought in performance and maintained properly.
                </p>
            </div>
            <div class="confirmed">
                <input type="submit" value="Confirmed">
            </div>
        </div>
        {{--  --}}
    <br>
        {{--  --}}
        <div class="book">
            <div class="img">
                <img src="/images/audi.jpg">
            </div>
            <div class="text">
                <h1 class="font-bold text-2xl">Audi R8</h1>
                <p class="pt-1">From Date: 1/3/2023<br>
                To Date: 5/3/2023 
                </p>
                <br>
                <p>This is the one one of the best and the most important car.
                    No dought in performance and maintained properly.
                </p>
            </div>
            <div class="confirmed">
                <input type="submit" value="Confirmed">
            </div>
        </div>
        {{--  --}}
        {{--  --}}
    </div>
</div>

@endsection