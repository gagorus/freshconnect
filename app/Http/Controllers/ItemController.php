<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fruit;

use App\Models\Vegetable;

class ItemController extends Controller
{
    public function viewItems()
    {
        $fruits = Fruit::all();
        $vegetables = Vegetable::all();
        return view('home', [
            'vegetables' => $vegetables,
            'fruits' => $fruits
        ]);

    }

    public function viewVegetable()
    {
        $vegetables = Vegetable::all();
        return view('home', ['vegetables' => $vegetables]);
    }
}
