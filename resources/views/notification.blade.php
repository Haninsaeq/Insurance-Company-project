<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<body class="bg-gradient-to-r from-blue-500 via-blue-100 to-pink-500">
     <!-- navgation bar  -->
     <x-navbar> </x-navbar>
    
<div class="container mx-auto px-20 mt-10 ">

    <h1 class="text-center text-4xl font-bold mb-6 bg-black bg-opacity-60 px-6 py-2 rounded">
        Companys notification
      </h1>
    <div class="p-10">
        <div class="relative max-w-7xl mx-auto">
            <div class="max-w-lg mx-auto rounded-lg shadow-lg overflow-hidden lg:max-w-none lg:flex">
                <div class="flex-1 px-6 py-8 lg:p-12 bg-gray-600">
                   
                    <div class="block w-full overflow-x-auto max-w-xl border bg-white">
                        <table class="items-center w-full bg-transparent border-collapse">
                            <thead>
                                <tr>
                                    <th
                                        class="px-4 bg-blue-500 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">
                                        company</th>
                                    <th
                                        class="px-4 bg-blue-500 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">
                                        message</th>
                                    <th
                                        class="px-4 bg-blue-500 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap min-w-140-px">
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                             @foreach($nots as $not)
                                <tr class="text-gray-500">
                                    <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">
                                       {{$not->company}} </th>
                                    <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">
                                        {{$not->message}}</td>
                                    
                                 
                                </tr>
                             @endforeach
                           
                            </tbody>
                        </table>
                    </div>
                </div>
                <div
                    class="py-8 px-6 text-center lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-12 bg-gray-700">
                    <p class="text-lg leading-6 font-medium text-white"></p>payment for this year
                    <div class="mt-4 flex items-center justify-center text-5xl font-extrabold text-white">
                        <span></span><span class="ml-3 text-xl font-medium text-gray-50">USD</span>
                    </div>
                    <div class="mt-6">
                        <div class="rounded-md shadow">
                            <a href="#"
                                class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-600">Buy
                                now</a>
                        </div>
                        <p class="text-gray-300 text-sm mt-3">100% money back guarantee</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


     <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
     <script src="https://cdn.tailwindcss.com"></script>
    
</body>
</html>