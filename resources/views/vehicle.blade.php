@extends('components.boilerplate')

@section('content')
<div class="description pt-24 ">
    <h1 class="text-center text-4xl pt-12 "><< <span class="text-red-600">Vehicle</span> Description >></h1>
</div>
<div class="cardetail">
    <h2 class="text-4xl font-bold">Vehicle Detail</h2>
    <button> Latest Cars
        <div class="triangle"></div>
    </button>
</div>
<div class="mainsection">
    <div class="desc">

        <div class="desc1 ">

            <div class="imgsrc">
                <img src="/images/audi.jpg">

            </div>
            <div class="imgdesc">
                <h1>Lamborgini</h1>   
                <p class="py-2"> Eos vel voluptate laudantium aut maxime reprehenderit dolore. Tempora natus sunt aliquid?</p>            
                <h3 class="py-2">Rs.10000/day</h3>
                <div class="icons">
                    <div class="i1 i">
                        <i class="fa-solid fa-user"></i> &nbsp 2 Seat
                    </div>
                    <div class="i2 i"><i class="fa-solid fa-car"></i> &nbsp Petrol Engine
                    </div>
                    <div class="i3 i"><i class="fa-regular fa-calendar-days"></i>&nbsp 2022 Model</div>
                </div>
                <button class="text-white bg-blue-500 rounded p-2">Book Now</button>
            </div>

        </div>

        {{--  --}}
        <br>
        
        <div class="desc1">

            <div class="imgsrc">
                <img src="/images/lamm.png">
            </div>
            <div class="imgdesc">
                <h1>Lamborgini</h1>   
                <p class="py-2"> Eos vel voluptate laudantium aut maxime reprehenderit dolore. Tempora natus sunt aliquid?</p>            
                <h3 class="py-2">Rs.10000/day</h3>
                <div class="icons">
                    <div class="i1 i">
                        <i class="fa-solid fa-user"></i> &nbsp 2 Seat
                    </div>
                    <div class="i2 i"><i class="fa-solid fa-car"></i> &nbsp Petrol Engine
                    </div>
                    <div class="i3 i"><i class="fa-regular fa-calendar-days"></i>&nbsp 2022 Model</div>
                </div>
                <button class="text-white bg-blue-500 rounded p-2">Book Now</button>
            </div>
        </div>


{{--  --}}
        <br>
        <div class="desc1">

            <div class="imgsrc">
                <img src="/images/audi1.png">

            </div>
            <div class="imgdesc">
                <h1>Lamborgini</h1>   
                <p class="py-2"> Eos vel voluptate laudantium aut maxime reprehenderit dolore. Tempora natus sunt aliquid?</p>            
                <h3 class="py-2">Rs.10000/day</h3>
                <div class="icons">
                    <div class="i1 i">
                        <i class="fa-solid fa-user"></i> &nbsp 2 Seat
                    </div>
                    <div class="i2 i"><i class="fa-solid fa-car"></i> &nbsp Petrol Engine
                    </div>
                    <div class="i3 i"><i class="fa-regular fa-calendar-days"></i>&nbsp 2022 Model</div>
                </div>
                <button class="text-white bg-blue-500 rounded p-2">Book Now</button>
            </div>
        </div>
    </div>

    <br>

    
    <div class="latest">
        <div class="minilatest">
            <div class="imgsec">
                <img src="/images/c1.jpg">
            </div>
            <div class="textsection">
                <h1>Lamborgini</h1>
                <p>Rs 10000/day</p>
                <i class="fa-solid fa-user py-3"></i> &nbsp 2 Seat
            </div>
        </div>
        {{--  --}}
        
        <div class="minilatest">
            <div class="imgsec">
                <img src="/images/c1.jpg">
            </div>
            <div class="textsection">
                <h1>Lamborgini</h1>
                <p>Rs 10000/day</p>
                <i class="fa-solid fa-user py-3"></i> &nbsp 2 Seat
            </div>
        </div>
        {{--  --}}
        <div class="minilatest">
            <div class="imgsec">
                <img src="/images/c1.jpg">
            </div>
            <div class="textsection">
                <h1>Lamborgini</h1>
                <p>Rs 10000/day</p>
                <i class="fa-solid fa-user py-3"></i> &nbsp 2 Seat
            </div>
        </div>

        <div class="minilatest">
            <div class="imgsec">
                <img src="/images/c1.jpg">
            </div>
            <div class="textsection">
                <h1>Lamborgini</h1>
                <p>Rs 10000/day</p>
                <i class="fa-solid fa-user py-3"></i> &nbsp 2 Seat
            </div>
        </div>


        {{--  --}}

    </div>
</div>
@endsection