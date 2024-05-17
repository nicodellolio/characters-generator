<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();

        return view('guests.items', compact('items'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return view('guests.show', compact('item'));
        
    }

}
