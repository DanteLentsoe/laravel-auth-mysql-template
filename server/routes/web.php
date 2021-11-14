<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/orders', function () {


    // moack data
$pizzas = [
    ['type' => 'Meaty Pizza', 'panType' => 'Thick', 'price' => 12],
    ['type' => 'MushRoom Pizza', 'panType' => 'Thin', 'price' => 5],
    ['type' => 'Hawaii Pizza', 'panType' => 'Thin', 'price' => 9],
    ['type' => 'Veggey Pizza', 'panType' => 'Thick', 'price' => 35],
    ['type' => 'Vegan Pizza', 'panType' => 'Thick', 'price' => 134],
    ['type' => 'Beef Pizza', 'panType' => 'Thick', 'price' => 3]
];
    return view('orders', ['pizzas' => $pizzas ]);
});
?>