<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class EcustomerController extends Controller
{
    //
    public function list(){
        $customers = Customer::all();
        return view('customer.elist')->with('customers',$customers);
    }
    public function details(Request $req){
        $customer = Customer::where('id',decrypt($req->id))->first();
        // return $customer->orders;
        return view('customer.details')->with('customer',$customer);
    }
}
