<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function index()
    {

        echo 'Eloquent Relashions';
    }

    public function OneToOne()
    {

        // obtain phone number form a client

        // $client1 = Client::find(12)->phone;

        // echo 'Phone number from client ID: ' . $client1->client_id . ' : ' . $client1->phone_number;
        // echo '<hr>';

        // all data drom client and is phone number

        // $cliente2 = Client::find(12);
        // $phone = $cliente2->phone->phone_number;
        // echo '<br>';
        // echo 'Client Name: ' . $cliente2->client_name . '<br>';
        // echo 'Client Phone: ' . $phone;
        // echo '<hr>';

        // using with() method
        // $client3 = Client::with('phone')->find(12);
        // echo '<br>';
        // echo 'Client Name: ' . $client3->client_name . '<br>';
        // echo 'Client Phone: ' . $client3->phone->phone_number;
        // echo '<hr>';

        $clients = Client::with('phone')->get();
        $i = 1;
        foreach ($clients as $client) {
            echo '<br>';
            echo $i . ' - Client Name : ' . $client->client_name . ' - Phone : ' . $client->phone->phone_number;
            $i++;
        }
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
