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
    public function store(){
        // error_log(request('name')); //log received params in console
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        $pizza->save();
        return redirect('/')->with('mssg', 'Thanks for your order!'); //add session var mssg
    }
    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        return redirect('/pizzas');
    }
}
