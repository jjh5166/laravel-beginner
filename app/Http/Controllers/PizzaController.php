<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(){
        // $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('name', 'desc')->get();
        // $pizzas = Pizza::where('type', 'hawaiian')->get();
        $pizzas = Pizza::latest()->get();
        return view('pizzas.index',['pizzas' => $pizzas]);
    }
    public function show($id){
        // $pizza = Pizza::find($id); basic find method
        $pizza = Pizza::findOrFail($id); //404 error when not found
        return view('pizzas.show', ['pizza' => $pizza]);
    }
    public function create(){
        return view('pizzas.create');
    }
}
