<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllergeenController extends Controller
{
    public function show($name)
    {
        $allergeen = DB::table('allergeen')
            ->where('Naam', $name)
            ->first();

        if ($allergeen === null) {
            return redirect()->back()->with('error', 'Allergeen not found');
        }

        $products = DB::table('productperallergeen')
            ->join('product', 'productperallergeen.product_id', '=', 'product.id')
            ->where('allergeen_id', $allergeen->id)
            ->select('product.Naam', 'productperallergeen.*')
            ->get();

        return view('allergeen.show', ['allergeen' => $allergeen, 'products' => $products]);
    }
}
