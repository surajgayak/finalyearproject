@extends('components.boilerplate')

@section('content')

<div class="container pt-36 px-6 mx-auto">
  @if (session()->has('status'))
      
    <div class="  text-center text-white alert bg-green-400 rounded-lg py-5 px-6  text-4xl" role="alert">
        {{session('status')}}
        <button type="button" class="btn-close box-content w-4 h-4 p-1 ml-auto text-yellow-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      
@endif
<br>

    <section class="mb-32 text-gray-800">
      <div class="flex justify-center">
        <div class="text-center lg:max-w-3xl md:max-w-xl">
          <h2 class="text-3xl font-bold mb-12 px-6">Contact us</h2>
        </div>
      </div>
  
      <div class="flex flex-wrap">
        <div class="grow-0 shrink-0 basis-auto mb-12 lg:mb-0 w-full lg:w-5/12 px-3 lg:px-6">
          <form action="{{route('enquirycontact')}}" method="post">
            @csrf
            <div class="form-group mb-6">
              <input type="text" class="form-control block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="name"
                placeholder="Name" name="name" required>
            </div>
            <div class="form-group mb-6">
              <input type="email" class="form-control block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8"
                placeholder="Email address" name="email" required >
            </div>

            <div class="form-group mb-6">
              <input type="number" class="form-control block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="contact"
                placeholder="Contact"  min="0" name="contact" required>
            </div>


            <div class="form-group mb-6">
              <textarea class="
              form-control
              block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
            " id="exampleFormControlTextarea13" rows="3" placeholder="Message" required name=" message"></textarea>
            </div>
            
            <button type="submit" class="
            w-full
            px-6
            py-2.5
            bg-blue-600
            text-white
            font-medium
            text-xs
            leading-tight
            uppercase
            rounded
            shadow-md
            hover:bg-blue-700 hover:shadow-lg
            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
            active:bg-blue-800 active:shadow-lg
            transition
            duration-150
            ease-in-out">Send</button>
          </form>
        </div>

        {{-- ..................................................................... --}}

        <div class="grow-0 shrink-0 basis-auto w-full lg:w-7/12">
          <div class="flex flex-wrap">
            <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
              <div class="flex items-start">
                <div class="shrink-0">
                  <div class="p-4 bg-blue-600 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                    <i class="fa-regular fa-envelope text-white text-2xl"></i>
                  </div>
                </div>
                <div class="grow ml-6">
                  <p class="font-bold mb-1">Email</p>
                  <p class="text-gray-500">hamrorental@gmail.com</p>
                </div>
              </div>
            </div>
            <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
              <div class="flex items-start">
                <div class="shrink-0">
                  <div class="p-4 bg-blue-600 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                    <i class="fa-regular fa-address-book text-white text-2xl"></i>
                  </div>
                </div>
                <div class="grow ml-6">
                  <p class="font-bold mb-1">Contact</p>
                  <p class="text-gray-500">9845974586</p>
                </div>
              </div>
            </div>
            <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
              <div class="flex align-start">
                <div class="shrink-0">
                  <div class="p-4 bg-blue-600 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                    <i class="fa-solid fa-taxi text-white text-2xl"></i>
                  </div>
                </div>
                <div class="grow ml-6">
                  <p class="font-bold mb-1">Services</p>
                  <p class="text-gray-500">Easy and fast</p>
                </div>
              </div>
            </div>
            <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
              <div class="flex align-start">
                <div class="shrink-0">
                  <div class="p-4 bg-blue-600 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                    <i class="fa-regular fa-circle-xmark text-white text-2xl"></i>
                  </div>
                </div>
                <div class="grow ml-6">
                  <p class="font-bold mb-1">Problem</p>
                  <p class="text-gray-500">hamrorental@gmail.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->
  
  </div>
  <!-- Container for demo purpose -->
@endsection

