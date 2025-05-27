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
<body>
     <!-- navgation bar  -->
     <x-navbar> </x-navbar>
    
<div class="container mx-auto px-20 mt-10 ">
    <h2 class="text-center text-3xl font-bold mb-6">Your Orders Insurances</h2>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="py-3 px-4 text-left">Type</th>
                    <th class="py-3 px-4 text-left">Start</th>
                    <th class="py-3 px-4 text-left">End</th>
                    <th class="py-3 px-4 text-left">Cost</th>
                    <th class="py-3 px-4 text-left">Number of People</th>
                    <th class="py-3 px-4 text-left">Paid</th>
                    <th class="py-3 px-4 text-left">Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach($orders as $order)
                   @if($order->useremail==Session::get('email'))
                    <tr class="hover:bg-gray-100 border-b">
                        <td class="py-3 px-4">{{ $order->type }}</td>
                        <td class="py-3 px-4">{{ $order->start }}</td>
                        <td class="py-3 px-4">{{ $order->end }}</td>
                        <td class="py-3 px-4">{{ $order->cost }}</td>
                        <td class="py-3 px-4">{{ $order->numberofpeople }}</td>
                        <td class="py-3 px-4">{{ $order->paied ? 'Yes' : 'No' }}</td>
                        <td class="py-3 px-4">
                            <form action="/Cancel-Insurance/delete" method="POST" >
                                @csrf
                                @method('DELETE')
                                <input type="text" value="{{$order->id}}" name="rowid">
                                <button type="submit" class="text-red-600 hover:text-red-800 font-semibold">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endif
                @endforeach
            </tbody>
        </table>

        @if($orders->isEmpty())
            <div class="mt-5 p-4 bg-yellow-200 text-yellow-800 rounded-lg">
                No orders found.
            </div>
        @endif
    </div>
</div>




     <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
     <script src="https://cdn.tailwindcss.com"></script>
    
</body>
</html>