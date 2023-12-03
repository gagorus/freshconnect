<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FruitController extends Controller
{
    public function viewFruit()
    {
        $fruits = Fruit::all();
        //return view('fruits.index', compact('fruits'));
    }
}
