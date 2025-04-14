<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\TestModel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $products = TestModel::all()->toArray();

        echo '<pre>';
        print_r($products);
    }
}
