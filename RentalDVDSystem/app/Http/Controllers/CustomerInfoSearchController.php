<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerInfoSearchController extends Controller
{
    function index(){
        \Log::debug('start CustomerInfoSearchController!');
        return view('customer_info_search.index');
    }


    function result(Request $request){
        \Log::debug('start CustomerInfoSearchController!');

        $customer_name = $request->input('customer_name');

        $customer_searchQuery = Customer::query();

        $customer_searchQuery = $customer_searchQuery->join('address' , 'customer.address_id' , '=' , 'address.address_id')
        ->join('city' , 'address.city_id' , '=' , 'city.city_id')
        ->join('country' , 'city.country_id' , '=' , 'country.country_id')
        ->select('customer.customer_id' , 'customer.first_name' , 'customer.last_name' , 'customer.email' , 'country.country' , 'city.city' , 'address.address' , 'address.address2')
        ->where('customer.first_name' , 'like' , "%$customer_name%")
        ->orwhere('customer.last_name' , 'like' , "%$customer_name%");

        $results = $customer_searchQuery->paginate(15);

        return view('customer_info_search.result' , compact('results'));
    }

    // function customer_info_search_back(){
    //     return view('customer_info_search.index');
    // }

    // public function customer_info_search_move_film_info_search(){
    //     return view('film_info_search.index');

    // }
}
