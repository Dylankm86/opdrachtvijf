<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllergeenController extends Controller
{
    public function showAllergens($name)
    {
        $product = DB::table('product')
            ->where('Naam', $name)
            ->first();

        if ($product === null) {
            return redirect()->back()->with('error', 'Product not found');
        }

        $allergens = DB::table('productperallergeen')
            ->join('allergeen', 'productperallergeen.allergeen_id', '=', 'allergeen.id')
            ->where('product_id', $product->id)
            ->select('allergeen.Naam', 'allergeen.Omschrijving', 'productperallergeen.*')
            ->get();

        return view('allergeen.show', ['product' => $product, 'allergens' => $allergens]);
    }
}
