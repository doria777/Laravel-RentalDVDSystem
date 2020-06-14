<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\customer;
class DashboardController extends Controller
{
    public function index(){
        \Log::debug('start DashboardController!');

        $film_info_searchQuery = Film::query();

            $film_info_searchQuery = $film_info_searchQuery->join('film_actor' , 'film.film_id' , '=' , 'film_actor.film_id')
                ->join('actor' , 'film_actor.actor_id' , '=' , 'actor.actor_id')
                ->join('film_category' , 'film.film_id' , '=' , 'film_category.film_id')
                ->join('category' , 'film_category.category_id' , '=' , 'category.category_id')
                ->select('film.film_id' , 'film.title' , 'film.description' , 'category.name' , 'actor.first_name' , 'actor.last_name')
                ->orderBy('film.film_id' , 'asc');

            $film_info_search_results = $film_info_searchQuery->get();

        $customer_info_searchQuery = Customer::query();

            $customer_info_searchQuery = $customer_info_searchQuery->join('address' , 'customer.address_id' , '=' , 'address.address_id')
                ->join('city' , 'address.city_id' , '=' , 'city.city_id')
                ->join('country' , 'city.country_id' , '=' , 'country.country_id')
                ->select('customer.customer_id' , 'customer.first_name' , 'customer.last_name' , 'customer.email' , 'country.country' , 'city.city' , 'address.address' , 'address.address2')
                ->orderBy('customer.customer_id' , 'asc');

            $customer_info_search_results = $customer_info_searchQuery->get();

        return view('dashboard.index' , compact('film_info_search_results' , 'customer_info_search_results'));
    }
}
