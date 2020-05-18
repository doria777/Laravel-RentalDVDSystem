<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class CountryController extends Controller
{
    public function index()
    {
        \Log::debug('start CountryController!');
        $countries = Country::paginate(15);
        return view('country.index' , compact('countries'));
    }
}
