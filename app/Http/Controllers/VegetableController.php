<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VegetableController extends Controller
{
    public function index()
    {
        $vegetables = Vegetable::all();
        //return view('vegetables.index', compact('vegetables'));
    }
}
