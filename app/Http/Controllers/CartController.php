<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fruit;
use App\Models\Vegetable;
use App\Models\Cart;
class CartController extends Controller
{
    public function viewCart($id, $category) {


        if($category == 'fruits'){
            $fruits = Fruit::where('fruitid', $id)->first();

        }
        else if ($category == 'vegetables'){
            $vegetables = Vegetable::where('vegetableid', $id)->first();

        }

        $cart = new Cart;
        $cart->userid = 1;
        $cart->itemid = $id;
        $cart->category = $category;
        $cart->quantity = 1;
        $cart->timestamps = false;
        $cart->save();
        return redirect()->route('homeview');


        // Use $variable1, $variable2, $variable3 as needed
    }
}
