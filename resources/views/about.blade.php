@extends('components.boilerplate')

@section('content')
<h1 class="pt-36 text-center text-4xl pb-8 font-bold"><span><< About</span> Us>></h1>
<div class="about ">
    <div class="text">
<h1 class="text-2xl font-bold pl-5"><span>Hamro</span> Rental Service</h1>
<br>
        <p class="text-xl pl-5 ">Hamro Rental Service is the online vehicle rental service .We provide all the rental 
            facility. Users can search a provienent vehicle and book for their program.We provide 
            a service as fast as possible and helps you in every destination.It is more flexible .
            Users are able to see the vehicle ,see the description like no. of seat,price per day/trip,
            vehicle brand,engine ,drivers and the many more.
        </p>
        <br>
            <h1 class="text-xl px-2"><b>></b> All nepal safari</h1>
            <h1 class="text-xl px-2"><b>></b> Limited liability</h1>
            <h1 class="text-xl px-2"><b>></b> Easy booking  </h1>
            <h1 class="text-xl px-2"><b>></b> Safe & Privacy</h1>
            <h1 class="text-xl px-2"><b>></b> Hamro Rental Service is reliable and fast. </h1>
          
            
    </div>
    <div class="photo">
        <img src="/images/audi.jpg">
    </div>
</div>
{{--  --}}
<div class="carts">
    <x-aboutcard name="Uttam Neupane" imag="images/utm.png" tit="FrontEnd Developer" bio="Im a young intelligent and sellf learner. Im a FrontEnd Developer ">
    </x-aboutcard>
    <x-aboutcard name="Suraj Gayak" imag="images/sur.png" tit="FrontEnd Developer/Graphics Designer" bio="Im a young intelligent and sellf learner. Im a FrontEnd Developer "  >
    </x-aboutcard>
    <x-aboutcard name="Pawan Poudel" imag="images/pwn.png" tit="Backend Developer" bio="Im a young intelligent and sellf learner. Im a Backend Developer ">
    </x-aboutcard>
</div>

@endsection
