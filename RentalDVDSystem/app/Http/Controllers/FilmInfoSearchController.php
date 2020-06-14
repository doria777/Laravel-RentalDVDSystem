<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Film;

class FilmInfoSearchController extends Controller
{
    public function index()
    {
        \Log::debug('start FilmInfoSearchController!');
        return view('film_info_search.index');
    }

    public function result(request $request)
    {
        \Log::debug('start FilmInfoSearchController!');

        $title = $request->input('title');
        $searchQuery = Film::query();
        $searchQuery = $searchQuery->join('film_actor' , 'film.film_id' , '=' , 'film_actor.film_id')
                    ->join('actor' , 'film_actor.actor_id' , '=' , 'actor.actor_id')
                    ->join('film_category' , 'film.film_id' , '=' , 'film_category.film_id')
                    ->join('category' , 'film_category.category_id' , '=' , 'category.category_id')
                    ->select('film.film_id' , 'film.title' , 'film.description' , 'category.name' , 'actor.first_name' , 'actor.last_name')
                    ->where('film.title' , 'like' , "%$title%");

        $results = $searchQuery->paginate(15);


                    // $results = DB::table('film')
        //             ->join('film_actor' , 'film.film_id' , '=' , 'film_actor.film_id')
        //             ->join('actor' , 'film_actor.actor_id' , '=' , 'actor.actor_id')
        //             ->join('film_category' , 'film.film_id' , '=' , 'film_category.film_id')
        //             ->join('category' , 'film_category.category_id' , '=' , 'category.category_id')
        //             ->select('film'  , 'film.film_id' , 'film.title' , 'film.description' , 'category.name' , 'actor.first_name' , 'actor.last_name')
        //             ->where('film.title' , 'like' , "%{$title}%")
        //             ->paginate(15);

        return view('film_info_search.result' , compact('results'));
    }

    // public function film_info_search_back(){
    //     return view('film_info_search.index');
    // }

    // public function film_info_search_move_customer_info_search(){
    //     return view('customer_info_search.index');

    // }
}
