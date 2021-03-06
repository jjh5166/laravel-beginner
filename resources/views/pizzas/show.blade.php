@extends('layouts.app')

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
    {{-- named route pass var as second param --}}
    <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
    @csrf
    @method('DELETE')
        <button>Complete Order</button>
    </form>
    <a href="/pizzas" class="back"><- Back to all pizzas</a>
</div>
@endsection
