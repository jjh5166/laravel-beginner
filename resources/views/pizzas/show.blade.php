@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-details">
    <h1>Order for {{ $pizza->name}}</h1>
    <p class="type">Type - {{ $pizza->type }}</p>
    <p class="type">Base - {{ $pizza->base }}</p>
    <p>Extra Toppings</p>
    <ul>
        @foreach($pizza->toppings as $topping)
        <li>{{$topping}}</li>
        @endforeach
    </ul>
</div>
@endsection
