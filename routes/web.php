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
Route::get('/pizzas', function () {
    // get data from db
    $pizzas = [
        ['type' => 'hawaiian','base' => 'cheesey crust'],
        ['type' => 'volcano','base' => 'garlic crust'],
        ['type' => 'veg supreme','base' => 'thin & crispy']
    ]; // variables defined for view here and inserted into return function below
    return view('pizzas', ['pizzas' => $pizzas]); //string, json etc can be returned also
});
