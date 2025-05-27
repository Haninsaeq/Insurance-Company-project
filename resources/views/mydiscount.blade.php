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
        /* Make sure the body and html take the full height of the page */
        html, body {
            height: 100%;
            margin: 0;
        }

        /* Full height container */
        .container {
            height: 100%;
        }

        /* Make sure the table takes up full width and has proper padding */
        table {
            width: 100%;
            height: 100%;
        }

        /* Ensure the table is responsive */
        .table-container {
            overflow-x: auto;
        }

        .table-wrapper {
            height: calc(100vh - 20px); /* Adjust height to fit the screen */
        }
    </style>
</head>
<body class="bg-gradient-to-t from-blue-200 to-blue-800">
    <h1 class="text-center text-4xl font-bold mb-6 bg-black bg-opacity-40 px-6 py-2 rounded">
        Your discounts
        
      </h1>
    <section class="text-gray-600 body-font">
        <div class="container px-5 mt-8 mx-auto table-wrapper">
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                <div class="p-4 md:w-full sm:mb-0 mb-6"> <!-- Full width table container -->
                    <div class="w-full p-5 bg-blue-200 place-content-center text-sm rounded-2xl shadow-xl shadow-gray-400">
                        <div class="table-container w-full overflow-x-auto bg-white">
                            <table class="items-center w-full bg-transparent border-collapse">
                                <thead>
                                    <tr>
                                        <th class="px-4 bg-red-600 text-gray-300 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">
                                            Company</th>
                                        <th class="px-4 bg-red-600 text-gray-300 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap min-w-140-px">
                                            discount</th>
                                        <th class="px-4 bg-red-600 text-gray-300 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap min-w-140-px">
                                            code</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100">
                                    <!-- Example data, replace with dynamic content -->
                                  @foreach($discounts as $dis)
                                    @if($dis->useremail== Session::get('email'))
                                        <tr class="text-gray-500">
                                            <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">{{$dis->comapny}}</th>
                                            <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">{{$dis->discount}}</td>
                                            <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">{{$dis->code}}</td>
                                        
                                        </tr>
                                    @endif
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
