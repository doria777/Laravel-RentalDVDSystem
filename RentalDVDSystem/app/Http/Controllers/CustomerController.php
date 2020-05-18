<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        \Log::debug('start CustomerController!');
        $customers = Customer::paginate(15);
        return view('customer.index' , compact('customers'));
    }
}
