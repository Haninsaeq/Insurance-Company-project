<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-gray-100">
    <x-navbar></x-navbar>
    <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16 bg-sky-10">
    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">
        @foreach($insurances as $insurance)
          @if($insurance->insurance_id === 1)
            <div class="rounded overflow-hidden shadow-lg">
                <a href="#"></a>
                <div class="relative">
                    <a href="#">
                        <img class="w-full"
                             src="{{ asset('img/' . $insurance->name . '.jpg') }}"
                             alt="Sunset in the mountains">
                        <div class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25"></div>
                    </a>
                    <a href="#!">
                        <div class="absolute bottom-0 left-0 bg-gray-500 px-4 py-2 text-white text-sm hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                            Photos
                        </div>
                    </a>
                    <a href="#!">
                        <div class="text-sm absolute top-0 right-0 p-2 bg-gray-500 px-4 text-white rounded-full h-16 w-16 flex flex-col items-center justify-center mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                            <span class="font-bold"></span>
                            <small>{{$insurance->name}}</small>
                        </div>
                    </a>
                </div>
                <div class="px-6 py-4 bg-white">
                    <a href="#" class="font-semibold text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out">{{$insurance->name}}</a>
                    <p class="text-gray-500 text-sm">{{$insurance->company}}</p>
                    <p>for 1 month $100</p>
                </div>

    <form action="/Show-All-Insurances/add1" method="POST" class="bg-white rounded-lg shadow-md p-6 max-w-md mx-auto">
        @csrf 
        <input type="hidden" value="{{ Session::get('email') }}" name="email">
        <input type="hidden" value="{{ $insurance->name }}" name="inname">

        <div class="mb-4">
            <label for="start-date" class="block text-sm font-bold mb-2">Choose a start date:</l
            abel>
            <select name="start" id="start-date" class="border border-gray-300 rounded-lg w-full p-2">
                <option value="Now">Now</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="end-date" class="block text-sm font-bold mb-2">Choose an end date:</label>
            <select name="end" id="end-date" class="border border-gray-300 rounded-lg w-full p-2">
                <option value="month">After 1 month</option>
                <option value="halfyear">After 6 months</option>
                <option value="year">After a year</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="end-type" class="block text-sm font-bold mb-2">Choose an end type:</label>
            <select name="type" id="end-type" class="border border-gray-300 rounded-lg w-full p-2">
                <option value="1">Monthly</option>
                <option value="6">Half-Yearly</option>
                <option value="12">Yearly</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="number-of-people" class="block text-sm font-bold mb-2">Number of people:</label>
            <select name="numberofpeople" id="number-of-people" class="border border-gray-300 rounded-lg w-full p-2">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">More</option>
            </select>
        </div>

        <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700 transition duration-200">Submit</button>
    </form>


            </div>
            @endif
        @endforeach
    </div>
    </div>

      
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>