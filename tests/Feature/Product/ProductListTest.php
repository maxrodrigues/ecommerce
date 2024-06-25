<?php

use App\Models\Product;

it ('should be return default phrase when no products stored', function () {
    $products = Product::all();
    $response = $this->get('/admin/products');
    $response->assertSeeText('Nenhum produto encontrado');

    $this->assertDatabaseCount('products', 0);
});

it ('should be return stored products', function () {
    $products = Product::factory(5)->create();
    $response = $this->get('/admin/products');
    $response->assertViewHas('products', $products);

    $this->assertDatabaseCount('products', 5);
});
