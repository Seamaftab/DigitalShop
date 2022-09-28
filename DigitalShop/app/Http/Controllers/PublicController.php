<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(20);
        return view('frontend.index',compact('products'));
    }
}
