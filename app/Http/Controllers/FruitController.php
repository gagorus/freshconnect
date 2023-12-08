<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fruit;

use App\Models\Vegetable;

class FruitController extends Controller
{
    public function viewItems()
    {
        $fruits = Fruit::all();
        $vegetables = Vegetable::all();
        return view('fruit', [
            'fruits' => $fruits
        ]);

    }


    public function viewDetail($id, $category)
    {
        if($category == 'fruits'){
            $item = Fruit::where('fruitid', $id)->first();
        }
        return view('detail', ['item' => $item]);
    }
}
