<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FilmText;

class FilmTextController extends Controller
{
    public function index()
    {
        \Log::debug('start FilmTextController!');
        $film_texts = FilmText::paginate(15);
        return view('film_text.index' , compact('film_texts'));
    }
}
