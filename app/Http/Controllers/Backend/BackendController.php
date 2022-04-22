<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    public function index(): View
    {
        $products = Product::with('category', 'tags', 'firstMedia')->get();
        return view('backend.index', compact('products'));
    }
    
}
