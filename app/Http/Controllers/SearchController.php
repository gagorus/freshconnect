<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fruit;

use App\Models\Vegetable;

use App\Models\Paket;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search_text = $request->input('searchbar');
        $fruits = Fruit::where('name', 'LIKE', '%' .$search_text.'%')->get();
        $vegetables = Vegetable::where('name', 'LIKE', '%' .$search_text.'%')->get();
        $pakets = Paket::where('name', 'LIKE', '%' .$search_text.'%')->get();

        // dump($search_text);

        return view('search', compact('fruits', 'vegetables', 'pakets', 'search_text'));
    }
}
