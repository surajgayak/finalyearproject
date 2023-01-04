<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    {{-- FORM --}}
    <h1 class="text-2xl font-bold text-center pt-12">SignUp for Driver</h1>
    <div class="block p-6 rounded-lg shadow-2xl content-center max-w-sm justify-center jesus m-auto">
        <form action="{{route('createdriver')}}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="form-group mb-6">
              <input type="text" class="form-control
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
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="firstname" name="fullname"
                aria-describedby="emailHelp123" placeholder="Full name" required>
            </div>
        
           

            {{--  --}}
            <div class="form-group mb-6">
              <input type="number" class="form-control
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
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="contact" min="0" name="contact"
               placeholder="Contact" required>
            </div>
            {{--  --}}
          
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
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="email"
              placeholder="Email address" name="email" required>
          </div>
          <div class="form-group mb-6">
            <input type="password" class="form-control block
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
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="password"
              placeholder="Password" name="password" required>
          </div>
          {{--  --}}
          <div class="flex justify-center">
            <div class="mb-3 w-96">
              <label for="file" class="form-label inline-block mb-2 text-gray-700">Upload Photo </label>
              <input class="form-control
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
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" id="file" name="photo" required>
            </div>
          </div>

          {{--  --}}
          <div class="flex justify-center">
            <div class="mb-3 w-96">
              <label for="licence" class="form-label inline-block mb-2 text-gray-700">Upload Licence</label>
              <input class="form-control
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
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" id="licence" name="licence" required>
            </div>
          </div>
          {{--  --}}
          <div class="flex justify-center">
            <div class="mb-3 w-96">
              <label for="bluebook" class="form-label inline-block mb-2 text-gray-700">Upload BlueBook  </label>
              <input class="form-control
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
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" id="bluebook" name="bluebook" required>
            </div>
          </div>
          <br>
          {{--  --}}
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
            ease-in-out">Sign up
        </button>

        
        </form>
      </div>
</body>
</html>