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
    <x-app-layout>
    </x-app-layout>

<div class="searchcontent pt-32 ">
  <h1 class="text-4xl font-bold text-center"> << <span>Searching</span> Results >> </h1>
  <br><br>
  <div class=" holy">
@foreach ($results as $result)
        <div class="rounded-lg shadow-lg bg-white max-w-sm">
          <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
            <img class="rounded-t-lg" src="{{'storage/'.$result->image}}" alt=""/>
          </a>
          <div class="p-6">
            <h5 class="text-gray-900 text-xl font-medium mb-2">{{ucfirst($result->name)}}</h5>
            <p class="text-gray-700 text-base mb-4">
              {{ucfirst($result->description)}}
            </p>
            <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">See</button>
          </div>
        </div>
@endforeach
</div>

</div>
    <x-footer>
    </x-footer>
</body>
</html>