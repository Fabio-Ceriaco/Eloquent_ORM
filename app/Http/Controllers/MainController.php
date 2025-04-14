<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class MainController extends Controller
{
    public function index()
    {

        // RETRIEV = SELECT


        // obteain all data from products

        // $results = Product::all(); // SELECT * FROM products;

        // foreach ($results as $product) {
        //     echo '<br>';
        //     echo $product->product_name;
        // }

        // echo $results[0]->product_name;


        // obteain all data as an assoc array

        // $results = Product::all()->toArray();

        // $this->showData($results);

        // return results as an array of objects strClass
        // $results = $this->ArrayOfObject(Product::all()->toArray());

        // obteain all products order by name
        // $results = Product::orderBy('product_name')->get()->toArray();

        // obteain 3 first products
        // $results = Product::limit(3)->get()->toArray();

        // obteain product from id
        // $results = Product::find(10)->toArray();

        // obteain products with Where..
        // $results = Product::where('price', '>=', 70)->get()->toArray();

        // $results = Product::where('price', '>=', 70)->first()->toArray();

        // obteains only the first elemnt if exists, if not exist return a empty array
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


        // INSERT

        // insert new product in products table
        // $new_product = new Product(); // define new object in db
        // // insert new values/data to new object
        // $new_product->product_name = 'Novo produto';
        // $new_product->price = 50;
        // $new_product->save();
        // // INSERT INTO products(product_name, price) VALUES ('Novo produto', 50);




        // Product::create([
        //     'product_name' => 'Novo produto2',
        //     'price' => 60,
        // ]);

        // Product::insert([
        //     [
        //         'product_name' => 'produto 4',
        //         'price' => 40,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ],
        //     [
        //         'product_name' => 'produto 5',
        //         'price' => 50,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ],
        //     [
        //         'product_name' => 'produto 6',
        //         'price' => 60,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ],
        // ]);



        // UPDATE

        // $product = Product::find(10); // SELECT * FROM products WHERE id = 10
        // $product->product_name = 'Clementina';
        // $product->price = 100;
        // $product->save();

        // Product::where('price', '<=', '10')->update([
        //     'price' => 150,
        // ]);

        // update (if exist) or create
        // Product::updateOrCreate(
        //     ['product_name' => 'chili'],
        //     ['price' => 25],
        // );


        // DELETE - hard delete and soft delete

        //-----------------------------
        // hard delete
        //-----------------------------

        // $product = Product::find(10);
        // $product->delete();

        // drop all table
        // Product::truncate();

        // Product::destroy(1);
        // Product::destroy(2, 3, 5);
        // Product::destroy([6, 7, 8]);

        // Product::where('price', '>=', 70)->delete();

        //-------------------------------
        // soft delete
        //-------------------------------

        // $product = Product::find(25);
        // $product->delete();

        // recover product with soft delete
        // $product = Product::withTrashed()
        //     ->where('id', 25)
        //     ->restore();

        // $product = Product::withTrashed()
        //     ->find(25)
        //     ->restore();

        // $product = Product::withTrashed()
        //     ->find(25);
        // $product->restore();
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
