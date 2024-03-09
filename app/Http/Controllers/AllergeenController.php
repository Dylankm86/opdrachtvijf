<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllergeenController extends Controller
{
    public function showAllergens($id)
    {
        $product = DB::table('product')
            ->where('id', $id)
            ->first();

        $allergens = DB::table('productperallergeen')
            ->join('allergeen', 'productperallergeen.allergeen_id', '=', 'allergeen.id')
            ->where('product_id', $product->id)
            ->select('allergeen.*')
            ->get();

        return view('product.allergens', ['product' => $product, 'allergens' => $allergens]);
    }
}
