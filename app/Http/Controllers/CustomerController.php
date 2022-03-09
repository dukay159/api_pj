<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::orderBy('id','DESC')->paginate(15);
        if($key = request()->key){
            $customers = Customer::orderBy('id','DESC')->where('name','like','%'.$key.'%')
                                                                ->orWhere('company','like','%'.$key.'%')                    
                                                                ->orWhere('phone',$key)
                                                                ->orWhere('email',$key)
                                                                ->paginate(5);
        }
        return view('pages.customer.indexUser')->with(compact('customers'));
    }


    public function create()
    {
        return view('pages.customer.createUser');
    }

    
    public function store(Customer $customer, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'company' => 'required'
        ]);

        $customer = Customer::create($request->all());
        $customer->save();

        return redirect()->route('customer.index')->with('success', 'Insert Successfully!!!');
    }


    public function show($customer)
    {

        $customers = Customer::find($customer);
        return view('pages.customer.showUser',[
            'customer' => $customer->customer()->latest()->paginate(10)
        ])->with(compact('customers'));
    }



    public function update(Request $request,$customer)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'company' => 'required'
        ]);
        $data = request()->all();
        $customers = Customer::find($customer);
        $customers->name = $data['name'];
        $customers->name = $data['phone'];
        $customers->name = $data['address'];
        $customers->name = $data['email'];
        $customers->name = $data['company'];
        $customers->save();
        return redirect()->route('customer.index')->with('success', 'Updated Successfully!!!');
    }


    public function destroy($customer)
    {

        $customers = Customer::find($customer);
        $customers->delete();
        return redirect()->back();

    }

}
