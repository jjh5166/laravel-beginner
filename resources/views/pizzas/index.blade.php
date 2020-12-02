@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title">Pizza List</div>
        {{-- for each loop, $loop var becomes accessible  --}}
        @foreach($pizzas as $pizza)
            <a href="/pizzas/{{$pizza->id}}">
                {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}
            </a><br/>
          {{-- <div>
            {{ $loop->index }} - {{ $pizza['type'] }} - {{ $pizza['base'] }}
            @if($loop->first)
              <span> - first in the loop</span>
            @endif
            @if($loop->last)
              <span> - last in the loop</span>
            @endif
          </div> --}}
        @endforeach
    </div>
</div>
@endsection
