<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function index() {
        $data = Products::all();
        return view('products', compact('data'));
    }
}
