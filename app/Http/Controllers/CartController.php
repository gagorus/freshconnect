<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fruit;
use App\Models\Vegetable;
use App\Models\Cart;
use App\Models\Paket;
class CartController extends Controller
{
    public function addCart($id, $category, $userid) {


        if($category == 'fruits'){
            $fruits = Fruit::where('fruitid', $id)->first();

        }
        else if ($category == 'vegetables'){
            $vegetables = Vegetable::where('vegetableid', $id)->first();

        }

        $cart = new Cart;
        $cart->userid = $userid;
        $cart->itemid = $id;
        $cart->category = $category;
        $cart->quantity = 1;
        $cart->timestamps = false;
        $cart->save();
        return redirect()->route('homeview');


        // Use $variable1, $variable2, $variable3 as needed
    }

    public function checkCart($id){

        $carts = Cart::where('userid', $id)->get();
        $items = [];
        foreach ($carts as $cart) {

            if($cart->category == 'fruits'){
                $fruits = Fruit::where('fruitid', $cart->itemid)->first();
                $items[] = $fruits;

            }
            else if ($cart->category == 'vegetables'){
                $vegetables = Vegetable::where('vegetableid', $cart->itemid)->first();
                $items[] = $vegetables;
            }

            else if ($cart->category == 'paket'){
                $paket = Paket::where('paketid', $cart->itemid)->first();
                $items[] = $paket;
            }
        }
        return view('cart', ['carts' => $carts, 'items' => $items]);
    }

    public function destroy($id, $userid){
        $carts = Cart::where('cartid', $id)->delete();
        return redirect()->route('check_cart', ['id' => $userid]);

    }

    public function destroyAll($id){
        $carts = Cart::where('userid', $id)->delete();
        return redirect()->route('thankpage');

    }
}
