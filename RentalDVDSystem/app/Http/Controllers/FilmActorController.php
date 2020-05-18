<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FilmActor;

class FilmActorController extends Controller
{
    public function index()
    {
        \Log::debug('start FilmActorController!');
        $film_actors = FilmActor::paginate(15);
        return view('film_actor.index' , compact('film_actors'));
    }
}
