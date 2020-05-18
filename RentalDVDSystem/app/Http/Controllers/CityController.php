<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\city;

class CityController extends Controller
{
    public function index()
    {
        \Log::debug('start CityController!');
        $cities = City::paginate(15);
        return view('city.index' , compact('cities'));
    }
}
