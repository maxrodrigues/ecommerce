<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductListController extends Controller
{

    public function __invoke(): Factory|View|Application
    {
        try {
            $products = Product::paginate(5);

            return view('layouts.admin.products.list', compact('products'));
        } catch (\Exception $e) {
            return abort(500, $e->getMessage());
        }
    }
}
