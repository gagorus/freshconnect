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

    public function viewDetail($id, $category)
    {
        if($category == 'fruits'){
            $item = Fruit::where('fruitid', $id)->first();
        }
        else if ($category == 'vegetables'){
            $item = Vegetable::where('vegetableid', $id)->first();
        }
        return view('detail', ['item' => $item]);
    }
}
