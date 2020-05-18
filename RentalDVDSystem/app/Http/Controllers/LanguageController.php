<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;

class LanguageController extends Controller
{
    public function index()
    {
        \Log::debug('start LanguageController!');
        $languages = Language::paginate(15);
        return view('language.index' , compact('languages'));
    }
}
