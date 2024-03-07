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
        return view('dashboard');
    }
}
