<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fruit;

use App\Models\Vegetable;

class VegetableController extends Controller
{
    public function viewItems()
    {
        $fruits = Fruit::all();
        $vegetables = Vegetable::all();
        return view('vegetable', [
            'vegetables' => $vegetables,

        ]);

    }

    public function viewVegetable()
    {
        $vegetables = Vegetable::all();
        return view('vegetable', ['vegetables' => $vegetables]);
    }

    public function viewDetail($id, $category)
    {
   
        if ($category == 'vegetables'){
            $item = Vegetable::where('vegetableid', $id)->first();
        }
        return view('detail', ['item' => $item]);
    }
}
