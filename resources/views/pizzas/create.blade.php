@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
<h1>Create A New Pizza</h1>
<form action="/pizzas" method="POST">
    @csrf
    <label for="name">Your Name</label>
    <input type="text" id="name" name="name">
    <label for="type">Choose Pizza Type</label>
    <select name="type" id="type">
        <option value="margarita">margarita</option>
        <option value="hawaiian">hawaiian</option>
        <option value="volcano">volcano</option>
        <option value="veg supreme">veg supreme</option>
    </select>
    <label for="base">Choose base type</label>
    <select name="base" id="base">
        <option value="cheesy crust">cheesy crust</option>
        <option value="garlic crust">garlic crust</option>
        <option value="thin & crispy">thin & crispy</option>
        <option value="Thick">Thick</option>
    </select>
    <fieldset>
        <label>Extra Toppings:</label>
        <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br/>
        <input type="checkbox" name="toppings[]" value="pineapple">Pineapple<br/>
        <input type="checkbox" name="toppings[]" value="garlic">Garlic<br/>
        <input type="checkbox" name="toppings[]" value="pepperoni">Pepperoni<br/>
    </fieldset>
    <input type="submit" value="Order Pizza">
</form>
</div>
@endsection
