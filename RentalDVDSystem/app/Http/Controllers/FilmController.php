<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class FilmController extends Controller
{
    public function index()
    {
        \Log::debug('start FilmController!');
        $films = Film::paginate(15);
        return view('film.index' , compact('films'));
    }
}
