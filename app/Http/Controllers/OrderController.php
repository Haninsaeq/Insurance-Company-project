<?php

namespace App\Http\Controllers;
use App\Models\Insurance;
use App\Models\InsuranceServ;
use Illuminate\Http\Request;

class OrderController extends Controller
{
   public function add()
   {
     $cost = (request('type') * 100)*request('Numberofpeople');
     dd($cost);
   }
}
