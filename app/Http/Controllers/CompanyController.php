<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Models\order2;
use App\Models\Dicount;
use App\Models\customersdiscount;
use App\Models\Arrow;
use App\Models\Notificationn;
use Illuminate\Http\Request;
use App\Mail\MailerName;
use Illuminate\Support\Facades\Mail;

class CompanyController extends Controller
{
    public function show()
    {
        return view('companies.showadmin',['companys'=>company::ALL()]);
    }

    public  function showg()
    {
        return view('companies.geico');
    }

    public function showcustomer()
    {
        return view('companies.geicocustomer',['customers'=>order2::ALL()]);
    }
    //discount
    public function showdiscount()
    {
        return view('companies.geicodiscount',['discounts'=>dicount::ALL(),
                                               'customers'=>order2::ALL(),
                                                'customersdiscount'=>customersdiscount::All() ]);
    }
    public  function adddiscount()
    {
        dicount::create([
          'company' => request('company'),
          'name'=>request('name'),
          'people'=>request('people'),
          'long'=>request('long'),
          'discount'=>request('discount')
        ]);
        return redirect()->back();
    }

    public function dodiscount()
    {
        $randomNumber = rand();
        customersdiscount::create([
            'code' => $randomNumber,
            'name' => request('name'),
            'comapny' => "Geico",
            'people' => request('long'),
            'discount' => request('discount'),
            'useremail' => request('email')
        ]);
        return redirect()->back();
    }

    public function removediscount()
    {
        dicount::where('id', request('id'))->delete();
        return redirect()->back();
    }

    public function showinvestment()
    {
        $company = Arrow::where('company','Geico')->first();
        return view('companies.geicoinvestment',['comp'=>$company]);
    }

    public function sendnotification()
    {
        return view('companies.geiconotification');
    }

    public function sendnot()
    {
          Notificationn::create([
              'company'=>request('name'),
              'message'=>request('message'),
              'year'=>request('year'),
              'month'=>request('month'),
              'day'=>request('day')
          ]);

          return redirect()->back();
    }
}
