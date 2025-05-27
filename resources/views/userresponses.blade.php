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
    <h2 class="text-center text-3xl font-bold mb-6">Your Messages</h2>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="py-3 px-4 text-left">message</th>
                    <th class="py-3 px-4 text-left">response</th>
                    <th class="py-3 px-4 text-left">checkresonse</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach($messages as $message)
                   @if($message->email==Session::get('email'))
                    <tr class="hover:bg-gray-100 border-b">
                        <td class="py-3 px-4">{{ $message->message }}</td>
                        <td class="py-3 px-4">{{ $message->respone }}</td>
                        <td class="py-3 px-4">{{ $message->checkrespone?'yes':'No' }}</td>
                    </tr>
                    @endif
                @endforeach
            </tbody>
        </table>

    </div>
</div>




     <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
     <script src="https://cdn.tailwindcss.com"></script>
    
</body>
</html>