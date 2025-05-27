<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="bg-orange-500">
    <section class="mt-20 container px-5 mx-auto">
        <div class="relative bg-sky-900 shadow-xl shadow-gray-300 rounded-2xl mt-8">
          <div class="absolute w-full top-0 left-0 flex justify-center -mt-24 z-20 ">
            <!-- Gecko Image -->
            <div class=" mt-10 w-32 h-32 rounded-full overflow-hidden border-4 border-white shadow-lg bg-white">
                <img src="{{asset("img/Geico2.jpg")}}" alt="GEICO Gecko" class="object-cover w-full h-full">
            </div>
        </div>
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center m-8">
                <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-8 md:mb-0 items-center text-center text-white">
                    <p class="mb-2 leading-relaxed">GEICO customers offers</p>
                    <p class="mb-2 leading-relaxed">Beautiful discounts </p>
                    <h1 class="title-font sm:text-5xl text-4xl mb-4 font-medium text-white-900">
                        One year 2 month free 
                    </h1>
           
                    <div class="flex justify-center py-8">
                        <button class="inline-flex border-b py-2 px-6 focus:outline-none text-lg transform motion-safe:hover:scale-110 bg-orange-400 text-white font-medium rounded-lg
                        hover:bg-sky-950  transition duration-700 ease-in-out"><a href="/note">Add Discount</a></button>
                        <button class="ml-4 inline-flex border-b py-2 px-6 focus:outline-none text-lg transform motion-safe:hover:scale-110 bg-sky-700 text-white font-medium rounded-lg
                        hover:bg-sky-950 transition duration-700 ease-in-out">Remove discount </button>
                    </div>
                </div>
                <div class="lg:max-w-sm lg:w-full md:w-1/2 w-3/6 shadow-2xl hover:bg-origin-padding contrast-125 scale-100">
                    <img class="object-cover object-center rounded-2xl shadow-xl shadow-gray-400" alt="hero" src="{{asset('img/Geico2.jpg')}}">
                </div>
            </div>
        </div>
    </section>

    <section class="text-gray-600 body-font">
        <div class="container px-5 mt-8 mx-auto">
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="w-full p-5 bg-blue-200 place-content-center text-sm rounded-2xl shadow-xl shadow-gray-400">
                           
                          <div class="block w-full overflow-x-auto max-w-xl border bg-white">
                              <table class="items-center w-full bg-transparent border-collapse">
                                  <thead>
                                      <tr>
                                          <th
                                              class="px-4 bg-green-500 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">
                                              name</th>
                                          <th
                                              class="px-4 bg-green-500 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap min-w-140-px">
                                              long
                                          </th>
                                          <th
                                              class="px-4 bg-green-500 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap min-w-140-px">
                                              people
                                          </th>
                                          <th
                                              class="px-4 bg-green-500 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap min-w-140-px">
                                            discount 
                                          </th>
                                          <th
                                          class="px-4 bg-green-500 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap min-w-140-px">
                                        remove
                                      </th>
                                      </tr>
                                  </thead>
                                  <tbody class="divide-y divide-gray-100">
                                  @foreach($discounts as $d)
                                    @if($d->company=="Geico")
                                      <tr class="text-gray-500">
                                          <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">
                                            {{$d->name}} </th>
                                          <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">
                                              {{$d->long}}</td>
                                          <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">
                                                  {{$d->people}}</td>
                                          <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">
                                                {{$d->discount}}</td>
                                          <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">
                                                <form action="/geico/discount/removepost"  method="POST">
                                                  @csrf
                                                  <input type="text" name="id" value="{{$d->id}}" hidden>
                                                  <button type="submit" class="ml-4 inline-flex border-b py-2 px-6 focus:outline-none text-sm transform motion-safe:hover:scale-110 bg-sky-700 text-white font-medium rounded-lg
                              hover:bg-sky-950 transition duration-700 ease-in-out">Remove discount </button>
                                                </form>
                                          </td>
                                          
                                      </tr>
                                    
                                    @endif
                                  @endforeach
                                  </tbody>
                              </table>
                          </div>
                        </div>
                    </div>
                    <main id="content" role="main" class="w-full max-w-md mx-auto p-6 ">
                        <div class="mt-3 bg-white rounded-xl shadow-lg dark:bg-green-500 dark:border-blue-800 border-2 border-[#d39430] shadow-gray-400">
                          <div class="p-4 sm:p-7">
                            <div class="text-center">
                              <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Insurance Form</h1>
                              <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                                Need to update another quote?
                                <a class="text-blue-600 decoration-2 hover:underline font-medium" href="#">
                                  Click here
                                </a>
                              </p>
                            </div>
                      
                            <div class="mt-5">
                              <form method="POST" class="grid gap-y-4" action="/geico/discount/post">
                                @csrf
                                <div>
                                  <label for="company" class="block text-sm font-bold ml-1 mb-2 dark:text-white">Company</label>
                                  <input
                                    type="text"
                                    id="company"
                                    name="company"
                                    value="Geico"
                                    class="py-3 px-4 block w-full border-2 border-gray-200 rounded-md text-sm focus:border-[#d39430] focus:ring-[#d39430] shadow-sm"
                                    required
                                  />
                                </div>
                      
                                <div>
                                  <label for="name" class="block text-sm font-bold ml-1 mb-2 dark:text-white">Insurance Type</label>
                                  <select
                                    id="name"
                                    name="name"
                                    class="py-3 px-4 block w-full border-2 border-gray-200 rounded-md text-sm focus:border-[#d39430] focus:ring-[#d39430] shadow-sm"
                                    required
                                  >
                                    <option value="Personal Use Car Insurance">Personal Use Car Insurance</option>
                                    <option value="Commercial Use Car Insurance">Commercial Use Car Insurance</option>
                                    <option value="Long-Distance Travel Car Insurance">Long-Distance Travel Car Insurance</option>
                                  </select>
                                </div>
                      
                                <div>
                                  <label for="people" class="block text-sm font-bold ml-1 mb-2 dark:text-white">Number of People</label>
                                  <input
                                    type="text"
                                    id="people"
                                    name="people"
                                    class="py-3 px-4 block w-full border-2 border-gray-200 rounded-md text-sm focus:border-[#d39430] focus:ring-[#d39430] shadow-sm"
                                    required
                                  />
                                </div>
                      
                                <div>
                                  <label for="discount" class="block text-sm font-bold ml-1 mb-2 dark:text-white">Discount (%)</label>
                                  <input
                                    type="number"
                                    id="discount"
                                    name="discount"
                                    class="py-3 px-4 block w-full border-2 border-gray-200 rounded-md text-sm focus:border-[#d39430] focus:ring-[#d39430] shadow-sm"
                                    required
                                  />
                                </div>
                      
                                <div>
                                  <label for="long" class="block text-sm font-bold ml-1 mb-2 dark:text-white">Long(month,year,halfyear)</label>
                                  <input
                                    type="text"
                                    id="long"
                                    name="long"
                                    class="py-3 px-4 block w-full border-2 border-gray-200 rounded-md text-sm focus:border-[#d39430] focus:ring-[#d39430] shadow-sm"
                                  />
                                </div>
                      
                                <button
                                  type="submit"
                                  class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-900 text-white hover:bg-[#b07827] focus:outline-none focus:ring-2 focus:ring-[#d39430] focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                                >
                                  Submit Form
                                </button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </main>
                      {{-- threee --}}
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6 ">
                      <div class="block w-full overflow-x-auto max-w-xl border bg-white shadow-gray-400 rounded-2xl">
                        <table class="items-center w-full bg-transparent border-collapse ">
                            <thead>
                                <tr>
                                    <th
                                        class="px-4 bg-green-500 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">
                                        name</th>
                               
                                    <th
                                        class="px-4 bg-green-500 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap min-w-140-px">
                                       discount 
                                    </th>
                                    <th
                                        class="px-4 bg-green-500 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap min-w-140-px">
                                       add the discount 
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                             @foreach($discounts as $d)
                              @if($d->company=="Geico")
                                 @foreach($customers as $c)
                                    @if($d->name == $c->type && $d->people == $c->numberofpeople && $d->long == $c->end)
                                    <tr class="text-gray-500">
                                        <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">
                                          {{$c->useremail}} </th>
                                        <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">
                                            {{$d->discount}} </th>
                                        <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">
                                            @foreach($customersdiscount as $cd)
                                               @if($d->name == $cd->name && $c->useremail == $cd->useremail )
                                                     {{$cd->code}}
                                                     @php
                                                         $check=1;
                                                     @endphp
                                               @endif
                                            @endforeach
                                            @if($check!=1)
                                            <form action="/geico/discount/dopost" method="POST">
                                                 @csrf 
                                                 <input type="text" name="discount" value="{{$d->discount}}"  hidden>
                                               <input type="text" name="email" value="{{$c->useremail}}"  hidden>  
                                               <input type="text" name="name" value="{{$d->name}}"  hidden>  
                                               <input type="text" name="long" value="{{$c->end}}"  hidden> 
                                                <button type="submit"class="inline-flex border-b py-2 px-6 focus:outline-none text-md transform motion-safe:hover:scale-110 bg-orange-400 text-white font-medium rounded-lg
                                                hover:bg-sky-950  transition duration-700 ease-in-out">ADD THE DISCOUNT</button>
                                            </form>
                                            @endif
                                        
                                        </th>
                                    </tr>
                                     @endif
                                  @endforeach
                              @endif
                             @endforeach
                            </tbody>
                        </table>
                    </div>
                  </div>
            </div>
        </div>
    </section>
</body>
</html>