<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function create()
    {
        $url = url("/customer");
        $data = compact('url');
        return view('customer')->with($data);
    }

    public function store(Request $request)
    {
        
        $customer = new Customer();
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->password = md5($request['password']);
        $customer->save();

        return redirect('/customer/view');
    }

    public function view(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != "")
        {
            $customers = Customer::where('name','like',"%$search%")
            ->orWhere('email','like',"%$search%")
            ->get();
        }
        else
        {
            $customers = Customer::all();
        }

       // $search = $request->query('search');
        $customers = Customer::all();
        $data = compact('customers');
        return view('customer-view')->with($data);
    }

    public function delete($id)
    {
        //find targets primary key
        $customer = Customer::find($id);
        if ($customer) {
            $customer->delete();
        }
        return redirect('/customer/view');
    }

     public function restore($id)
    {
        //find targets primary key
        $customer = Customer::withTrashed()->find($id);
        if ($customer) {
            $customer->restore();
        }
        return redirect('/customer/view');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        if ($customer) {
            $url = url('/customer/update')."/".$id;
            $data = compact('customer');
            return view('customer-edit')->with($data);
        } else {
            return redirect('/customer/view');
        }
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        if ($customer) {
            $customer->name = $request['name'];
            $customer->email = $request['email'];
             $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        }
        $customer->save();
        return redirect('/customer/view');
    }

    public function trash()
    {
        $customers = Customer::onlyTrashed()->get();
        $data = compact('customers');
        return view('customer-trash')->with($data);
    }

     public function forceDelete($id)
    {
        //find targets primary key
        $customer = Customer::find($id);
        if ($customer) {
            $customer->forceDelete();
        }
        return redirect('/customer/view');
    }

}

