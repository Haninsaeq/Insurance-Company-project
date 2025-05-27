<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
      background-image: url('{{asset("img/companies.jpg")}}');
      background-size: cover;
      background-position: center;
    }
  </style>
</head>
<body>
<h1 class="text-center text-4xl font-bold mb-6 bg-black bg-opacity-60 px-6 py-2 rounded">
    Our Collaboration Companies
  </h1>
<div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-2 sm:gap-2 gap-4 auto-cols-fr my-2 m-20 mt-20">

 @foreach($companys as $companyy)
    <a
        href="/investments/{{$companyy->company}}investment"
        class="flex flex-col items-center justify-center p-4 bg-blue-100 border border-4 border-gray-200 hover:border-rose-600 rounded-2xl group transition-colors min-h-[120px] transition-all duration-300"
    >
        <div class="mb-2 w-24 aspect-square flex items-center justify-center">
            <img class="max-w-full max-h-full object-contain" src="{{asset('img/'.$companyy->company .'.png')}}" alt="Heineken logo" />
        </div>
        <h5 class="text-center text-lg sm:text-base font-medium text-gray-900 group-hover:text-rose-600">
            Geico car company
        </h5>
    </a>
 @endforeach
 
</div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
     <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
