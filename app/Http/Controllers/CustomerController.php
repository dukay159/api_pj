<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Http\Resources\CustomerResource;
use App\Http\Resources\CustomerCollection;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show
        $customers = Customer::all();
        //dd($customers);
        return view('layouts.indexUser')->with(compact('customers'));
        //return new CustomerCollection(Customer::paginate(10)); //phaan trang
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $customer = new Customer();
        // $customer->title = $customer->title;
        // $customer->save();
        // return redirect()->back();
        return view('layouts.createUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Customer $customer, Request $request)
    {
        //phuong thuc post
        $request->validate([
            'name_customer' => 'required',
            'email_customer' => 'required',
            'phone_customer' => 'required',
            'address_customer' => 'required',
            'city_customer' => 'required'
        ]);

        $customer = Customer::create($request->all());
        $customer->save();
        //return new CustomerResource($customer);
        return redirect()->route('customer.index')->with('success', 'Insert Successfully!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($customer)
    {
        //hien thi
        // return new CustomerResource($customer);

        $customers = Customer::find($customer);
        return view('layouts.showUser')->with(compact('customers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function searchUser($customer)
    {
        //lay ra ng dung de update-phuong thuc put
        return view('layouts.userSearch')->with(compact('customers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$customer)
    {
        //update-phuong thuc post
        // $customer->update($request->all());
        // return new CustomerResource($customer);
        $request->validate([
            'name_customer' => 'required',
            'email_customer' => 'required',
            'phone_customer' => 'required',
            'address_customer' => 'required',
            'city_customer' => 'required'
        ]);
        $data = request()->all();
        $customers = Customer::find($customer);
        $customers->name_customer = $data['name_customer'];
        $customers->name_customer = $data['phone_customer'];
        $customers->name_customer = $data['address_customer'];
        $customers->name_customer = $data['email_customer'];
        $customers->name_customer = $data['city_customer'];
        $customers->save();
        return redirect()->route('customer.index')->with('success', 'Updated Successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($customer)
    {
        //delete
        //$customer->delete();
        $customers = Customer::find($customer);
        $customers->delete();
        return redirect()->back();
        // $customer = Customer::all();
        // $customer->delete();
        // return view('pages.layout', ['customer' => $customer]);
    }

    public function getSearch(Request $request)
    {
        $key = $_GET['key'];  
        echo $key;           

    }
}
