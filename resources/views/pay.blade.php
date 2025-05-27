<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        /* Ensure the table is fully responsive */
        .table-container {
            overflow-x: auto;
        }
    </style>
</head>
<body class="bg-gradient-to-t from-blue-200 to-blue-800">
    <div class="relative flex justify-center items-center mt-10">
        <div class="absolute animate-spin rounded-full h-32 w-32 border-t-4 border-b-4 border-purple-500"></div>
        <img src="{{asset('img/main.jpg')}}" class="rounded-full h-28 w-28">
    </div>

    <div class="flex items-center justify-center w-screen min-h-screen p-10">
        <!-- Component Start -->
        <div class="grid xl:grid-cols-5 md:grid-cols-5 grid-cols-1 gap-0">
            <!-- Tile 1 -->
            @foreach($orders as $order)
                @if($order->useremail == Session::get('email') && $order->paied==0)
                    <div class="group flex flex-col bg-neutral-300 rounded-sm p-4 m-1 border border-neutral-800 shadow-xs transition hover:shadow-lg dark:shadow-gray-700/25">
                        <div class="-m-4 h-24 bg-neutral-700 rounded-sm rounded-b-none transition border group-hover:border-gray-100 group-hover:shadow-lg group-hover:shadow-neutral-200">
                            <span class="text-neutral-300 font-mono tracking-widest p-4 pb-3 block text-xs text-center">MODEL</span>
                            <span class="flex w-28 mx-auto tracking-wide items-center justify-center rounded-full bg-green-100 px-2.5 py-0.5 text-green-700 group-hover:bg-green-200">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-5 mr-2 -ml-3 group-hover:animate group-hover:animate-pulse">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <p class="whitespace-nowrap text-lg leading-normal font-bold text-center self-center align-middle py-px">PAY</p>
                            </span>
                        </div>
                        <div>
                        

                            <!-- Table Container with Tailwind -->
                            <div class="table-container overflow-x-auto">
                                <table class="min-w-full bg-transparent border-collapse">
                                    <thead>
                                        <tr>
                                            <th class="px-4 bg-red-600 text-gray-300 py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0">type</th>
                                            <th class="px-4 bg-red-600 text-gray-300 py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 min-w-[140px]">end</th>
                                            <th class="px-4 bg-red-600 text-gray-300 py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 min-w-[140px]">cost</th>
                                            <th class="px-4 bg-red-600 text-gray-300 py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 min-w-[140px]">number of people</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-100">
                                        <tr class="text-gray-500">
                                            <td class="border-t-0 px-4 py-2 text-sm font-normal text-left">{{$order->type}}</td>
                                            <td class="border-t-0 px-4 py-2 text-sm font-normal text-left">{{$order->end}}</td>
                                            <td class="border-t-0 px-4 py-2 text-sm font-normal text-left">{{$order->cost}}</td>
                                            <td class="border-t-0 px-4 py-2 text-sm font-normal text-left">{{$order->numberofpeople}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="flex flex-col items-start">
                            <form action="/payment/post" method="POST">
                                @csrf
                                <label for="">Do you have a discount code </label>
                                <input type="number" name="code">
                                <input type="number" name="id" hidden value="{{$order->id}}">
                                <button type="submit">submit </button>
                            </form>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

</body>
</html>
