<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = Product::all()->toArray();
    echo '<pre>';

    print_r($products);
});
