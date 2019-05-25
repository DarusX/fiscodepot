<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class FiscoDepotController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function store()
    {
        return view('store')->with([
            'products' => Product::paginate(12)
        ]);
    }
}
