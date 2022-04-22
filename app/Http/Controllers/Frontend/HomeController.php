<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(): View
    {
        $coupon = Coupon::active()->public()->first();

        $categories = Category::select('slug', 'cover', 'name')
            ->active()
            ->whereParentId(null)
            ->limit(8)
            ->get();
        $reviews = Review::with('product', 'user')->orderBy('created_at','DESC')->limit(4)->get();

        return view('frontend.index', compact('categories', 'coupon','reviews'));
    }

    public function search(Request $request): JsonResponse
    {
        $data = Product::select('slug', 'name')
            ->where('name', 'LIKE', '%'.$request->productName. '%')
            ->active()
            ->hasQuantity()
            ->activeCategory()
            ->take(5)
            ->get();

        return response()->json($data);
    }
}
