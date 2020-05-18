<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;

class StoreController extends Controller
{
    public function index()
    {
        \Log::debug('start StoreController!');
        $stores = Store::paginate(15);
        return view('store.index' , compact('stores'));
    }
}
