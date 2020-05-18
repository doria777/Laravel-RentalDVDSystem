<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rental;

class RentalController extends Controller
{
    public function index()
    {
        \Log::debug('start RentalController!');
        $rentals = Rental::paginate(15);
        return view('rental.index' , compact('rentals'));
    }
}
