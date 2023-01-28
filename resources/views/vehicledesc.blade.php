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
          <p>Price/Day : {{$veh->price_day}}</p>
          <p>Seat : {{$veh->seat}}</p>
          <p>Engine : {{ucfirst($veh->engine)}}</p>
          <p>Fuel : {{ucfirst($veh->engine)}}</p>
          <p>Model : {{ucfirst($veh->model)}}</p>
          <input type="date" class="mt-3" name="date"required>
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