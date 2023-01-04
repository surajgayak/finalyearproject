<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
      />
        @vite('resources/css/app.css') 
        <title>Document</title>
    </head>
    <body>
        {{-- .......................HERO SECTION STARTS ..................................--}}
       <div class="hero bg-fixed">
        <div class="textdiv text-white text-center pt-48">
        <h1 class="text-amber-300 text-6xl font-bold">HAMRO RENTAL SERVICE</h1>
        <h2 class="py-5 text-3xl">Rent a Vehicle</h2>
        <p class="text-1xl">We provide the vehicle in a rent for your program . Find the best vehicle and book the best for your program .</p>
        <br><br>
        </div>
        <div class="searchsection bg-amber-400  m-auto rounded-2xl flex justify-around items-center flex-wrap">
            <div class="pickup okk bg-white rounded-2xl ">
                <input type="text" class=" rounded-2xl border-none       focus:outline-none my-4 " placeholder="  Pick up a Location">
            </div>
            <br>
            <div class="date okk bg-white rounded-2xl">
                <h2 class="pt-3 px-3 text-gray">Date</h2>
                <input type="date" class="mx-3" >
            </div>
            <br><br>
            <div class="time okk  bg-white rounded-2xl">
                <h2 class="pt-3 px-3 text-gray">Time</h2>
                <input type="time" class="mx-3">
            </div>
            <button class=" w-32 h-16 bg-blue-600 rounded-2xl text-white ">Search</button>
        </div>
       </div>
       {{--........................... HERO SECTION ENDS ..............................--}}
      <div class="howitwork">
        <div class=" latest text-3xl bg-blue-600">
            <h1>Latest Vehicles</h1>
            <div class="minidiv bg-blue-600"></div>
        </div>
        <div class="jesus">
        <x-card title="Audi" image="/images/audi.jpg"/>
        <x-card title="Ferrari" image="/images/audi1.png"/>
        <x-card title="Lambo" image="/images/audi3.png"/>
        <x-card title="Bugati" image="/images/l.png"/>
        <x-card title="Mercedes" image="/images/lambo.png"/>
        <x-card title="BMW" image="/images/lm.png"/>
    </div>
      </div>
      {{-- ........................WHY HAMRO RENTAL SERVICE............................ --}}
      <div class="rentalservice">
        <h1 class="text-center text-4xl pt-5">Why hamro rental service ?</h1>
        <div class="minirentalservice ">
            <div class="text mini">
                <h1 class="text-xl px-2"><b>></b> Hamro Rental Service is reliable and fast. </h1>
              
                <h1 class="text-xl px-2"><b>></b> Easy booking  </h1>
              
                <h1 class="text-xl px-2"><b>></b> Limited liability</h1>
              
                <h1 class="text-xl px-2"><b>></b> Safe & Privacy</h1>
              
                <h1 class="text-xl px-2"><b>></b> All nepal safari</h1>
                <br>
                <p>Hamro Rental Service is the online vehicle rental service .We provide all the rental 
                    facility. Users can search a provienent vehicle and book for their program.We provide 
                    a service as fast as possible and helps you in every destination.It is more flexible .
                    Users are able to see the vehicle ,see the description like no. of seat,price per day/trip,
                    vehicle brand,engine ,drivers and the many more.
                </p>
            </div>
            <div class="img mini">
                <img src="/images/audi.jpg">
            </div>
        </div>
      </div>
      
      {{-- Carasoul --}}

      <div class="carasoul">
        <div class="imag">
            <img src="/images/volks.png">
        </div>
        <div class="imag">
            <img src="/images/ford.png">

        </div>
        <div class="imag">
            <img src="/images/hyundai.png">

        </div>
        <div class="imag">
            <img src="/images/jeep.png">

        </div>
        <div class="imag">
            <img src="/images/tata.png">

        </div>

      </div>
{{-- ...............DRIVERSIGNUP ..........--}}

<div class="driver ">
    <div class="drivertext p-5 ">
      <h1 class="text-4xl font-bold"><span class="text-red-600">SignUp</span> as a Driver !</h1><br>
      <h3 class="text-xl ">If you want to become a driver then just upload requirements by just clicking below .</h3><br>
      &nbsp &nbsp
      <a href="{{route('driversignup')}}">
      <button class="bg-blue-800 px-3 py-2 text-white rounded-full">SignUp</button>
      </a>
    </div>
    <div class="car  ">
      <img src="images/remove.png">
    </div>
  </div>


  
      {{-- ...........................OUR TEAM................. --}}
      <div class="team">
        <h1 class="text-5xl text-center font-bold">Our<span> Team</span></h1>
        <div class="miniteam">
            <div class="pic1">
                <img src="/images/utm.png">
            </div>
            <div class="pic1">
                <img src="/images/sur.png">
            </div>
            <div class="pic1">
                <img src="/images/pwn.png">
            </div>
        </div>
      </div>

{{-- ................FOOTER................. --}}
<x-footer/>

    </body>
    </html>
</x-app-layout>
