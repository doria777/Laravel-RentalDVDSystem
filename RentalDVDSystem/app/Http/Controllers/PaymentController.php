<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
class PaymentController extends Controller
{
    public function index()
    {
        \Log::debug('start PaymentController!');
        $payments = Payment::paginate(15);
        return view('payment.index' , compact('payments'));
    }
}
