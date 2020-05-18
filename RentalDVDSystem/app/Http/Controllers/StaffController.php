<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;

class StaffController extends Controller
{
    public function index()
    {
        \Log::debug('start StaffController!');
        $staffs = Staff::paginate(15);
        return view('staff.index' , compact('staffs'));
    }
}
