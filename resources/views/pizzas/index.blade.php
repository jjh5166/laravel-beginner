@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">
  <h1>Pizza Orders</h1>
  @foreach($pizzas as $pizza)
    <div class="pizza-item">
      <img src="/img/pizza.png" alt="pizza icon">
      <h4><a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a></h4>
    </div>
  @endforeach

</div>

@endsection
{{-- notes on loops
    for each loop, $loop var becomes accessible
    <div>
    {{ $loop->index }} - {{ $pizza['type'] }} - {{ $pizza['base'] }}
        @if($loop->first)
            <span> - first in the loop</span>
        @endif
        @if($loop->last)
            <span> - last in the loop</span>
        @endif
    </div>
--}}

