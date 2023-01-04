@extends('components.boilerplate')

@section('content')
{{-- <h1 class='pt-24'>this is the hello contact section </h1> --}}
<!-- Container for demo purpose -->
<div class="container pt-36 px-6 mx-auto">

    <!-- Section: Design Block -->
    <section class="mb-32 text-gray-800">
      <div class="flex justify-center">
        <div class="text-center lg:max-w-3xl md:max-w-xl">
          <h2 class="text-3xl font-bold mb-12 px-6">Contact us</h2>
        </div>
      </div>
  
      <div class="flex flex-wrap">
        <div class="grow-0 shrink-0 basis-auto mb-12 lg:mb-0 w-full lg:w-5/12 px-3 lg:px-6">
          <form>
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
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
                placeholder="Name">
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
                placeholder="Email address">
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
            " id="exampleFormControlTextarea13" rows="3" placeholder="Message"></textarea>
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

