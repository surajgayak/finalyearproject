    <div class="rounded-lg shadow-lg bg-white max-w-sm">
      <a href="#!">
        <img class="rounded-t-lg" src="{{$image}}" alt="" style="width:100%;height:250px;">
      </a>
      <div class="p-6">
        <h5 class="text-gray-900 text-xl font-medium mb-2">{{$title}}</h5>
        <p class="text-gray-700 text-base mb-4">
          {{ $desc}}
        </p>
        <a href="{{route('seevehicle')}}">
        <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">See More</button>
        </a>
      </div>
    </div>
