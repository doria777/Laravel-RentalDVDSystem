<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorController extends Controller
{
    public function index()
    {
        \Log::debug('start ActorController!');
        $actors = Actor::paginate(15);
        return view('actor.index' , compact('actors'));
    }
}