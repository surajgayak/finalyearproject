<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    <x-app-layout>
        
    <div class="contain">
      <h2 class="text-4xl text-center p-5 font-bold"><span>Vehicle Details</span></h2>
      @foreach ($vehh as $ve)

      <div class="car-info">
        <img src="images/audi.jpg" alt="Car Image">
        <div class="descriptionss">
          <h1 class="font-bold text-2xl">{{$ve->name}}</h1>
          <br>
          <p>Price/Day :{{$ve->price_day}}</p>
          <p>Seat :{{$ve->seat}}</p>
          <p>Engine :{{$ve->engine}}</p>
          <p>Fuel :{{$ve->engine}}</p>
          <p>Model :{{$ve->model}}</p>
          <input type="date" class="mt-3" required>
          <input type="time" class="mt-2" required>
          <button class="rent-btn">Confirmed</button>
        </div>
      </div>
      @endforeach

    </div>


      <div class="features">
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
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Sapiente iste quo itaque facere ullam voluptas earum recusandae, 
            provident, sed accusantium officia odit, tempore minus adipisci saepe excepturi quibusdam dolor doloribu
            s illum. Doloribus delectus unde pariatur temporibus sed, amet deserunt minus reiciendis repudiandae sapi
            ente dolorem possimus dignissimos ad earum placeat,

    </div>
    </div>


    </x-app-layout>
</body>
</html>