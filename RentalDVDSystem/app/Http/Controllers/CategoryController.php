<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        \Log::debug('start CategoryController!');
        $categories = Category::paginate(15);
        return view('category.index' , compact('categories'));
    }
}
