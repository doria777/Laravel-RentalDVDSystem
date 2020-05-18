<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventory;

class InventoryController extends Controller
{
    public function index()
    {
        \Log::debug('start InventoryController!');
        $inventories = Inventory::paginate(15);
        return view('inventory.index' , compact('inventories'));
    }
}
