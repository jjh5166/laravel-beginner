<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
//using built in auth. controller, views, etc all scaffolded
use App\Http\Controllers\PizzaController;
use GuzzleHttp\Middleware;

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

Route::get('/pizzas', [PizzaController::class, 'index'])->middleware('auth'); //protect route here or on controller
Route::post('/pizzas', [PizzaController::class, 'store']);
Route::get('/pizzas/create', [PizzaController::class, 'create']);
// create route must come first or the show route will hit first
Route::get('/pizzas/{id}', [PizzaController::class, 'show'])->middleware('auth');
Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy'])->middleware('auth');

// Route::get('/pizzas', function () {
//     // get data from db
//     // variables defined for view here and inserted into return function below
//     $pizzas = [
//         ['type' => 'hawaiian','base' => 'cheesey crust'],
//         ['type' => 'volcano','base' => 'garlic crust'],
//         ['type' => 'veg supreme','base' => 'thin & crispy']
//     ];
//     $name = request('name');

//     //string, json etc can be returned also
//     return view('pizzas',
//         [
//             'pizzas' => $pizzas,
//             'name' => $name
//         ]
//     );
// });

// // use wildcards in curly braces for params
// Route::get('/pizzas/{id}', function ($id) {
//     //query db with $id variable
//     return view('details', ['id' => $id]);
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
