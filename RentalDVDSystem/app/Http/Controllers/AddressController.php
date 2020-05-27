<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;

class AddressController extends Controller
{
    public function index()
    {
        \Log::debug('start AddressController!');
        $addresses = Address::paginate(15);
        return view('address.index' , compact('addresses'));
    }
}