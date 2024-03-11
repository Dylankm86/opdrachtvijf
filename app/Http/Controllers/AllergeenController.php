<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllergeenController extends Controller
{
    public function index()
    {
        $allergeen = DB::table('allergeen')
            ->get();

        return view('allergeen.show', ['allergeen' => $allergeen]);
    }
}
