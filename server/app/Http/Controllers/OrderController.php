<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    
    // order page routes configuration
    public function index(){
           
        // moack data
        $pizzas = [
            ['type' => 'Meaty Pizza', 'panType' => 'Thick', 'price' => 12],
            ['type' => 'MushRoom Pizza', 'panType' => 'Thin', 'price' => 5],
            ['type' => 'Hawaii Pizza', 'panType' => 'Thin', 'price' => 9],
            ['type' => 'Veggey Pizza', 'panType' => 'Thick', 'price' => 35],
            ['type' => 'Vegan Pizza', 'panType' => 'Thick', 'price' => 134],
            ['type' => 'Beef Pizza', 'panType' => 'Thick', 'price' => 3]
        ];

        // query parameter 

        $name = request('name');

            return view('orders', ['pizzas' => $pizzas, 
            'name' => $name
        ]); 
            }

    // dynamic page routes 
    public function show($id) {
           // $id used for db record data
           return view('details', ['id' => $id ]);
    }
}

?>