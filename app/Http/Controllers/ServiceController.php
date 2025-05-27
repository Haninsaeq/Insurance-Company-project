<?php

namespace App\Http\Controllers;
use App\Models\Insurance;
use App\Models\InsuranceServ;
use App\Models\Order2;
use App\Models\Custarrow;
use App\Models\Company;
use App\Models\Notificationn;
use App\Models\Arrow;
use App\Models\Employer;
use App\Models\Customersdiscount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
   public function show()
   {

    return view('insurances',['insurances'=>insurance::all()]);
   }

   public function showhealth()
   {

    return view('health-insurance',['insurances'=>InsuranceServ::all()]);
   }
   public function showcar()
   {

    return view('Car-insurance-based-on-mileage',['insurances'=>InsuranceServ::all()]);
   }


   public function cancel()
   {

    return view('Cancel-Insurance',['orders'=>Order2::all()]);
   }
   public function canceldelete()
   {
     $o = Order2::where('id',request('rowid'));
      $o->delete();
      return redirect('/')->with('success', 'User registered successfully!');
    
   }

   public function discount()
   {
      return view('mydiscount',['discounts'=>customersdiscount::ALL()]);
   }

   public function pay()
   {
      return view('pay',['orders'=>Order2::all()]);
   }

   public function paypost()
   {
       // Get the discount code
       $code = customersdiscount::where('code', request('code'))->first();
       
       // Check if a code was found
       if ($code) {
           // Find the order by ID
         
         $order = Order2::find(request('id'));
            if ($order) {
                    if($order->type == $code->name){

                        // Update the order cost by applying the discount
                        $order->update([
                            'cost' => $order->cost / (100/$code->discount),
                            'pay'=>1

                        ]);
                        $code->delete();

            
                        // Optionally, return a success message or redirect
                        return response()->json(['message' => 'Order updated successfully!']);
                    }else {
                        return response()->json(['error' => 'the code is not for this company services']);
                    }
            } else {
                return response()->json(['error' => 'Order not found.'], 404);
            }
       } else {
           return response()->json(['error' => 'Invalid discount code.'], 400);
       }
   }
   

   public function invest()
   {
     return view('invest',['companys'=>company::ALL()]);
   }

   public function investcustomer()
   {

    $company = Arrow::where('company','Geico')->first();
    return view('companies.geicoinvestment',['comp'=>$company]);
   }
   
   public  function buyarrow()
   {
    $company = Arrow::where('company','Geico')->first();
    custarrow::create([
        'email' => request('email'),
        'company' => 'Geico',
        'price' =>  $company->price * request('number'),
        'number'=> request('number')
    ]);
    return redirect()->back();

   }

   public function deletearrow()
   {
    $company = Arrow::where('company','Geico')->first();
    $user = custarrow::where('email',request('email'))->first();
    $user->update([
        'number'=>$user->number - request('number'),
        'price'=> $user->price - (request('number')*$company->price)
    ]);
    return redirect()->back();
   }

   public function my_investements()
   {
    return view('myinvest',['arrows'=>custarrow::ALL(),'company'=>arrow::ALL()]);
   }

   public function not()
   {
    return view('notification',['nots'=>notificationn::All()]);
   }

   public function employersign()
   {
    return view('employersign');
   }

   public function emppost()
   {
    $data = request()->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    // Find employer by email
    $employer = Employer::where('email', $data['email'])->first();

    // Check if user exists and password matches (no hashing)
    if (!$employer || $data['password'] !== $employer->password) {
        throw ValidationException::withMessages([
            'email' => 'Invalid email or password',
        ]);
    }

    Session::put('emailemployer',request('email'));
    return redirect('/')->with('success', 'User registered successfully!');
     
   }
} 
