<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GEICO Inspired</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="font-sans bg-gray-50 text-gray-900">

    <!-- Navbar -->
    <header class="bg-blue-800 text-white py-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center px-6">
            <div class="flex items-center space-x-4">
                <img src="{{asset("img/".trim($header).".jpg")}}" alt="GEICO Logo" class="h-8">
                <nav class="hidden md:flex space-x-6 text-sm font-semibold">
                    <a href="#" class="hover:text-blue-400">Home</a>
                    <a href="#" class="hover:text-blue-400">{{$serv1}}</a>
                    <a href="#" class="hover:text-blue-400">{{$serv2}}</a>
                    <a href="#" class="hover:text-blue-400">{{$serv3}}</a>
                    <a href="#" class="hover:text-blue-400">{{$serv4}}</a>
                </nav>
            </div>
            <div class="flex space-x-4">
                <a href="#" class="text-sm font-semibold hover:text-blue-400">Sign In</a>
                <a href="#" class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-500">Get a {{$slot}}</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
   
    <section class="bg-cover bg-center h-[85vh] flex flex-col justify-center items-center text-center px-6" style="background-image: url('{{asset("img/company2.jpg")}}');">
        <h1 class="text-5xl font-bold leading-tight mb-4 text-white drop-shadow-lg">15 minutes could save you 15% or more on  insurance.</h1>
        <p class="text-lg mb-6 text-white drop-shadow-lg">Get a free quote today and start saving!</p>
        <a href="#quote" class="bg-yellow-400 text-blue-900 py-3 px-6 rounded-lg text-lg font-semibold hover:bg-yellow-300 transition duration-300">{{$slot}}</a>
    </section>
    
    <!-- Floating Gecko Menu Section -->
    <section class="relative {{$backcolor}} text-white pt-20 pb-10 -mt-12 z-10">
        <div class="absolute w-full top-0 left-0 flex justify-center -mt-24 z-20 animate-bounce">
            <!-- Gecko Image -->
            <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-white shadow-lg bg-white">
                <img src="{{asset("img/".trim($header).".jpg")}}" alt="GEICO Gecko" class="object-cover w-full h-full">
            </div>
        </div>

        <!-- Menu Box -->
        <div class="mt-20 max-w-4xl mx-auto bg-white rounded-xl shadow-lg px-6 py-8 text-gray-800 z-10 relative">
            <h2 class="text-2xl font-bold text-center mb-6 text-blue-800">What would you like to insure?</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4 text-sm text-center">
                <div class="flex flex-col items-center space-y-1 hover:text-blue-600 cursor-pointer">
                    <span class="material-icons text-3xl">directions_car</span>
                    <span>{{$insurance}}</span>
                </div>
                <div class="flex flex-col items-center space-y-1 hover:text-blue-600 cursor-pointer">
                    <span class="material-icons text-3xl">home</span>
                    <a href="{{$investment}}">Inverstment</a>
                </div>
                <div class="flex flex-col items-center space-y-1 hover:text-blue-600 cursor-pointer">
                    <span class="material-icons text-3xl">apartment</span>
                    <a href="{{$customer}}">our customer</a>
                </div>
                <div class="flex flex-col items-center space-y-1 hover:text-blue-600 cursor-pointer">
                    <span class="material-icons text-3xl">two_wheeler</span>
                    <a href="{{$discount}}">Discount</a>
                </div>
                <div class="flex flex-col items-center space-y-1 hover:text-blue-600 cursor-pointer">
                    <span class="material-icons text-3xl">business_center</span>
                    <a href="{{$notification}}">Send/recive notifications</a>
                </div>
                {{-- <div class="flex flex-col items-center space-y-1 hover:text-blue-600 cursor-pointer">
                    <span class="material-icons text-3xl">health_and_safety</span>
                    <span>Health</span>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="bg-white py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Why Choose {{$slot}}?</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 px-6">
                <div class="bg-gray-100 p-8 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-blue-800 mb-4">Affordable Rates</h3>
                    <p class="text-gray-700">Save money with low rates and great coverage options that suit your needs.</p>
                </div>
                <div class="bg-gray-100 p-8 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-blue-800 mb-4">Easy Claims Process</h3>
                    <p class="text-gray-700">File a claim online or through the app, and get quick, hassle-free service.</p>
                </div>
                <div class="bg-gray-100 p-8 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-blue-800 mb-4">24/7 Support</h3>
                    <p class="text-gray-700">Our support team is always available to assist you anytime, anywhere.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-800 text-white py-8">
        <div class="container mx-auto text-center">
            <p class="text-sm mb-4">© 2025 GEICO. All Rights Reserved.</p>
            <div class="flex justify-center space-x-6">
                <a href="#" class="hover:text-blue-400">Privacy Policy</a>
                <a href="#" class="hover:text-blue-400">Terms of Service</a>
                <a href="#" class="hover:text-blue-400">Accessibility</a>
            </div>
        </div>
    </footer>

</body>

</html>
