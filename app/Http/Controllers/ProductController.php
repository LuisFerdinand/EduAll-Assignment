<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('brand', 'like', '%' . $search . '%')
                ->orWhere('model', 'like', '%' . $search . '%')
                ->orWhere('screen_size', 'like', '%' . $search . '%')
                ->orWhere('color', 'like', '%' . $search . '%')
                ->orWhere('harddisk', 'like', '%' . $search . '%')
                ->orWhere('cpu', 'like', '%' . $search . '%')
                ->orWhere('ram', 'like', '%' . $search . '%')
                ->orWhere('OS', 'like', '%' . $search . '%')
                ->orWhere('special_features', 'like', '%' . $search . '%')
                ->orWhere('graphics', 'like', '%' . $search . '%')
                ->orWhere('graphics_coprocessor', 'like', '%' . $search . '%')
                ->orWhere('cpu_speed', 'like', '%' . $search . '%')
                ->orWhere('rating', 'like', '%' . $search . '%')
                ->orWhere('price', 'like', '%' . $search . '%');
        }

        $products = $query->get();
        return view('products.index', compact('products'));
    }
}
