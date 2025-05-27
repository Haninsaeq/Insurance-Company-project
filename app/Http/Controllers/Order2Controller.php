<?php

namespace App\Http\Controllers;
use App\Models\Insurance;
use App\Models\Order2;
use App\Models\InsuranceServ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class Order2Controller extends Controller
{
   public function add()
   {
    $cost = (request('type') * 100)*request('numberofpeople');
    
    Order2::create([
      'useremail'=>request('email'),
      'type'=>request('inname'),
      'start'=>Now(),
      'end'=>request('end'),
      'cost'=>$cost,
      'numberofpeople'=>request('numberofpeople'),
      'paied'=>0
    ]);

     Session::put('cost',$cost);
     return redirect('/Show-All-Insurances')->with('success', 'User registered successfully!');
     
   }

   
}