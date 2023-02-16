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
    <form action="{{route('bookings',$veh->id)}}" method="post">
      @csrf
      <div class="car-info">
        <img src="{{asset('storage/' . $veh->image)}}" alt="Car Image">
        <div class="descriptionss">
          <h1 class="font-bold text-4xl">{{ucfirst($veh->name)}}</h1>
          <br>
          <p>Price/Day :Rs.{{$veh->price_day}}</p>
          <p>Seat : {{$veh->seat}}</p>
          <p>Engine : {{ucfirst($veh->engine)}}</p>
          <p>Fuel : {{ucfirst($veh->engine)}}</p>
          <p>Model : {{ucfirst($veh->model)}}</p>
          {{-- Pickup Date
          <input type="date" class="mt-3" name="date" min="{{\Carbon\Carbon::tomorrow()->format('Y-m-d') }}"
          required>
          <br>
          Drop Date
          <input type="date" class="mt-3" name="dropdate" min="{{\Carbon\Carbon::tomorrow()->format('Y-m-d') }}"
          required> --}}
        
            Pickup Date
            <input type="date" class="mt-3" name="pickup_date" min="{{ $pickup_date }}" required>
            <br>
            Drop Date
            <input type="date" class="mt-3" name="drop_date" min="{{ $min_dropdate }}" required>

          @php
          $user_id = Auth::id(); // get the ID of the currently logged-in user
          $books_for_user = $bok->where('user_id', $user_id); // filter the $bok collection to find books for the current user
        @endphp
        
        @if ($books_for_user->count() > 0)
          @foreach ($books_for_user as $book)
            {{-- {{ $book->dropdate }} --}}
          @endforeach
        @else
          {{-- <p>No books found for current user.</p> --}}
        @endif
        

      
              <br>
                    {{-- @php
          // get the most recent booking
          $last_booking = \App\Models\Booking::orderBy('id', 'desc')->first();

          // get the drop date of the most recent booking, if available
          $last_dropdate = $last_booking ? $last_booking->dropdate : null;

          // set the pickup date of the new booking to be the same as the previous booking's drop date, if available
          $pickup_date = $last_dropdate ?? \Carbon\Carbon::parse('default pickup date');

          // set the minimum drop date for all bookings to be the pickup date of the new booking
          $min_dropdate = $pickup_date->addDay()->format('Y-m-d');

          foreach ($bok as $book) {
              $book->min_dropdate = $min_dropdate;
              $book->pickup_date = $pickup_date;
          }
      @endphp

      <input type="date" class="mt-3" name="date" value="{{ $pickup_date->format('Y-m-d') }}" min="{{ $min_dropdate }}" required>

          <label for="drop-date">Drop Date</label>
          <input type="date" class="dropdate" name="dropdate" min="{{$bok->first()->min_dropdate }}" required>
 --}}
          <input type="time" class="mt-2" name="time" required>
          <input type="text" placeholder="pickup Location" class="mt-2" name="location" required>
          <br>
          <input type="submit" class="rent-btn" value="Confirmed">
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
           {{ucfirst($veh->description)}}
      </div>
    </div>
    </div>



</body>
</html>