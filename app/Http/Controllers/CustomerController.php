<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function create(){
        return view('customer');
    }

    public function store(Request $request){ 
        $customer = new Customer();
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->password = md5($request['password']);
        $customer->save();

        return redirect('/customer/view');
    }   

    public function view(){
         $customers = Customer::all();
         $data = compact('customers');
         return view('customer-view')->with($data);
    }
}

