<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductListController extends Controller
{

    public function __invoke()
    {
        return view('layouts.admin.products');
    }
}
