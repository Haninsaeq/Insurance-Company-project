<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
        Our Customers Needs
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
                                        class="px-4 bg-green-500 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">
                                        OUR CUSTOMERS</th>
                                    <th
                                        class="px-4 bg-green-500 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">
                                        pays</th>
                                    <th
                                        class="px-4 bg-green-500 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap min-w-140-px">
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @php
                                    $count=0;
                                    $countp=0;
                                    $countc=0;
                                    $countl=0;
                                @endphp
                             @foreach($customers as $c)
                              @if($c->type=="Personal Use Car Insurance"   )
                                <tr class="text-gray-500">
                                    <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">Organic
                                       {{$c->useremail}} </th>
                                    <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">
                                        {{$c->cost}}</td>
                                    <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                                        <div class="flex items-center">
                                            <span class="mr-2 text-xs font-medium">{{$c->cost/100}}</span>
                                            <div class="relative w-full">
                                                <div class="w-full bg-gray-200 rounded-sm h-2">
                                                    <div class="bg-cyan-600 h-2 rounded-sm" style="width: {{$c->cost/100}}%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @php
                                 $count=$count+$c->cost;
                                 $countp=$countp+1;
                                @endphp
                                
                                @endif
                             @if($c->type == "Commercial Use Car Insurance")
                                <tr class="text-gray-500">
                                    <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">Organic
                                    {{$c->useremail}} </th>
                                    <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">
                                        {{$c->cost}}</td>
                                    <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                                        <div class="flex items-center">
                                            <span class="mr-2 text-xs font-medium">{{$c->cost/100}}</span>
                                            <div class="relative w-full">
                                                <div class="w-full bg-gray-200 rounded-sm h-2">
                                                    <div class="bg-cyan-600 h-2 rounded-sm" style="width: {{$c->cost/100}}%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @php
                                     $count=$count+$c->cost;
                                     $countc=$countc+1;
                                @endphp
                               
                             @endif
                             @if($c->type =="Long-Distance Travel Car Insurance")
                                <tr class="text-gray-500">
                                    <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">Organic
                                    {{$c->useremail}} </th>
                                    <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">
                                        {{$c->cost}}</td>
                                    <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                                        <div class="flex items-center">
                                            <span class="mr-2 text-xs font-medium">{{$c->cost/100}}</span>
                                            <div class="relative w-full">
                                                <div class="w-full bg-gray-200 rounded-sm h-2">
                                                    <div class="bg-cyan-600 h-2 rounded-sm" style="width: {{$c->cost/100}}%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @php
                                       $count=$count+$c->cost;
                                       $countl=$countl+1;
                                @endphp
                             
                             @endif
                                
                             @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div
                    class="py-8 px-6 text-center lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-12 bg-gray-700">
                    <p class="text-lg leading-6 font-medium text-white"></p>payment for this year
                    <div class="mt-4 flex items-center justify-center text-5xl font-extrabold text-white">
                        <span>${{$count}}</span><span class="ml-3 text-xl font-medium text-gray-50">USD</span>
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="font-sans leading-normal tracking-normal mt-10 bg-blue-900 ml-60 mr-60 ">

    <canvas id="myChart"></canvas>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Personal Use Car Insurance', 'Commercial Use Car Insurance', 'Long-Distance Travel Car Insurance'],
                datasets: [{
                    data: [{{$countp}}, {{$countc}}, {{$countl}}],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 206, 86, 0.7)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom',
                    labels: {
                        fontColor: 'black',
                        fontSize: 14,
                        padding: 20
                    }
                }
            }
        });
    </script>

</div>
</body>
</html>