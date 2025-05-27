
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCompany - Alternative Hero Section</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>
<body class="font-sans">
       <!-- navgation bar  -->
       <x-navbar> </x-navbar>
        <!-- main Section -->
        <section class="relative  text-white overflow-hidden z-0 bg-weigth">
            <div class="absolute inset-0 bg-black opacity-50 "></div>
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url({{asset('img/main.jpg')}})"></div>
            
            <div class="container mx-auto px-4 py-24 md:py-32 relative z-10">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <!-- Left Side: Company Info -->
                    <div class="w-full md:w-1/2 mb-12 md:mb-0">
                        <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                        Insurance <br>company
                        </h1>
                     
                      
                    </div>
                    
                    <!-- Right Side: Features -->
                    <div class="w-full md:w-1/2 md:pl-12 ">
                        <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-xl p-8 shadow-2xl">
                            <h2 class="text-2xl font-semibold mb-6">Why Choose Our Insurance Company?</h2>
                            <ul class="space-y-4">
                                <li class="flex items-center">
                                    <svg class="w-6 h-6 mr-3 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                    <span>Easy online claims submission </span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-6 h-6 mr-3 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                    <span> 24/7 customer support  </span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-6 h-6 mr-3 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                                    <span>Comprehensive coverage tailored to your needs  </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Decorative Element -->
            <div class="absolute bottom-0 left-0 right-0 ">
                <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="white"/>
                </svg>
            </div>
        </section>
        @guest
        <!-- services -->
        <div class="flex flex-wrap justify-center mt-10 bg-sky-800">
            <!-- card 1 -->
            <div class="p-4 max-w-sm">
                <div class="flex rounded-lg h-full dark:bg-gray-800 bg-sky-800 hover:bg-sky-700 p-8 flex-col">
                    <div class="flex items-center mb-3">
                        <div
                            class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full dark:bg-indigo-500 bg-indigo-500 text-white flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <h2 class="text-white dark:text-white text-lg font-medium">Feature 1</h2>
                    </div>
                    <div class="flex flex-col justify-between flex-grow">
                        <p class="leading-relaxed text-base text-white dark:text-gray-300">
                            Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.
                        </p>
                    </div>
                </div>
            </div>

            <!-- card 2 -->
            <div class="p-4 max-w-sm">
                <div class="flex rounded-lg h-full dark:bg-gray-800 bg-sky-800 hover:bg-sky-700 p-8 flex-col">
                    <div class="flex items-center mb-3">
                        <div
                            class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full dark:bg-indigo-500 bg-indigo-500 text-white flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <h2 class="text-white dark:text-white text-lg font-medium">Feature 2</h2>
                    </div>
                    <div class="flex flex-col justify-between flex-grow">
                        <p class="leading-relaxed text-base text-white dark:text-gray-300">
                            Lorem ipsum dolor sit amet. In quos laboriosam non neque eveniet 33 nihil molestias. Rem perspiciatis iure ut laborum inventore et maxime amet.
                        </p>
                    
                    </div>
                </div>
            </div>

            <!-- card 3 -->
            <div class="p-4 max-w-sm">
                <div class="flex rounded-lg h-full dark:bg-gray-800 bg-sky-800 hover:bg-sky-700 p-8 flex-col">
                    <div class="flex items-center mb-3">
                        <div
                            class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full dark:bg-indigo-500 bg-indigo-500 text-white flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <h2 class="text-white dark:text-white text-lg font-medium">Feature 3</h2>
                    </div>
                    <div class="flex flex-col justify-between flex-grow">
                        <p class="leading-relaxed text-base text-white dark:text-gray-300">
                            Lorem ipsum dolor sit amet. In quos laboriosam non neque eveniet 33 nihil molestias. Rem perspiciatis iure ut laborum inventore et maxime amet.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endguest

        @auth
        <div class="bg-weight-200 px-2 py-10">

        <div id="features" class="mx-auto max-w-6xl">
        <p class="text-center text-base font-semibold leading-7 text-primary-500">services insurance</p>
        <h2 class="text-center font-display text-3xl font-bold tracking-tight text-slate-900 md:text-4xl">
   
        </h2>
        <ul class="mt-16 grid grid-cols-1 gap-6 text-center text-slate-700 md:grid-cols-3">
         @foreach($services as $service)
     
                    <li class="rounded-xl bg-sky-300 px-6 py-8 shadow-sm">

                    @if( $service->name=="Show-All-Insurances")
                    <ion-icon name="compass-outline w-full"></ion-icon>
                    @endif
                    <h3 class="my-3 font-display font-medium"> <a href="/{{$service->name}}">{{$service->name}}</a></h3>
                    <p class="mt-1.5 text-sm leading-6 text-secondary-500">
                    {{$service->description}}
                    </p>

                    </li>
                
         @endforeach
          </ul>
         </div>

        <div>
        @endauth
        <!-- social media -->
        <ul class="flex justify-center mt-5 space-x-5 m-20 pt-24 ">
                <li>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
               
        </ul>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>