<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        // obtain all data from products

        // $results = Product::all(); // SELECT * FROM products;

        // foreach ($results as $product) {
        //     echo '<br>';
        //     echo $product->product_name;
        // }

        // echo $results[0]->product_name;


        // obtain all data as an assoc array

        // $results = Product::all()->toArray();

        // $this->showData($results);

        // return results as an array of objects strClass
        // $results = $this->ArrayOfObject(Product::all()->toArray());

        // obtain all products order by name
        // $results = Product::orderBy('product_name')->get()->toArray();

        // obtain 3 first products
        // $results = Product::limit(3)->get()->toArray();

        // obtain product from id
        // $results = Product::find(10)->toArray();

        // obtain products with Where..
        // $results = Product::where('price', '>=', 70)->get()->toArray();

        // $results = Product::where('price', '>=', 70)->first()->toArray();

        // obtains only the first elemnt if exists, if not exist return a empty array
        // $results = Product::where('price', '>=', 190)->firstOr(function () {
        //     return [];
        // });

        // $results = Product::find(10);

        // echo $results->price;
        // echo '<br>';

        // $results->price = 200; // define new price only in code not in db
        // echo $results->price;
        // echo '<br>';

        // $results->refresh(); // go back to original price in bd
        // echo $results->price;
        // echo '<br>';

        // $results = Product::find(10);

        // echo $results->product_name . '<br>';

        // $results = Product::where('price', '>=', 70)->first();
        // echo $results->product_name . ' tem um preço de ' . $results->price . '<br>';

        // $results = Product::firstwhere('price', '>=', 50);
        // echo $results->product_name . ' tem um preço de ' . $results->price . '<br>';


        // $results = Product::findOr(100, function () {
        //     echo 'Não foi encontrado o produto';
        // });

        // if ($results) {
        // echo $results->product_name . ' tem um preço de ' . $results->price . '<br>';
        // }


        // $results = Product::findOrFail(100);
        // echo $results->product_name . ' tem um preço de ' . $results->price . '<br>';

        // $total_products = Product::count();
        // $product_max_price = Product::max('price');
        // $product_min_price = Product::min('price');
        // $product_avg_price = Product::avg('price');
        // $product_sum_price = Product::sum('price');

        // $results = [
        //     'total_products' => $total_products,
        //     'product_max_price' => $product_max_price,
        //     'product_min_price' => $product_min_price,
        //     'product_avg_price' => $product_avg_price,
        //     'product_sum_price' => $product_sum_price,
        // ];


        // $this->showData($results);
    }

    private function showData($data)
    {
        echo '<pre>';
        print_r($data);
    }

    private function ArrayOfObject($data)
    {
        $tmp = [];
        foreach ($data as $key => $value) {
            $tmp[] = (object) $value;
        };

        return $tmp;
    }
}
