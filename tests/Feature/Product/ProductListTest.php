<?php

use App\Models\Product;

it ('should be return default phrase when no products stored', function () {
    $products = Product::all();
    $response = $this->get('/admin/products');
    $response->assertSeeText('Nenhum produto encontrado');
});
