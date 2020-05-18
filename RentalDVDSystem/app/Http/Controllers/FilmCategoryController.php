<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FilmCategory;

class FilmCategoryController extends Controller
{
    public function index()
    {
        \Log::debug('start FilmCategoryController!');
        $film_categories = FilmCategory::paginate(15);
        return view('film_category.index' , compact('film_categories'));
    }
}
