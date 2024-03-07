<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Magazijn;
use App\Models\ProductPerLeverancier;
use App\Models\Leverancier;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('magazijn')
            ->join('product', 'magazijn.Product_id', '=', 'product.id')
            ->join('productperleverancier', 'product.id', '=', 'productperleverancier.ProductId')
            ->join('leverancier', 'product_per_leverancier.LeverancierId', '=', 'leverancier.id')
            ->select('product.Barcode', 'product.Naam', 'magazijn.VerpakkingsEenheid', 'magazijn.AantalAanwezig', 'product.Allergeen', 'leverancier.Naam as LeverancierNaam')
            ->get();

        return view('products.index', ['products' => $products]);
    }
}
