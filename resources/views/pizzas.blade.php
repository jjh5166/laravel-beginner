@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">Pizzas</div>
        {{-- <p>{{$type}} - {{$base}} - {{$price}}</p> --}}
        @for($i = 0; $i < count($pizzas); $i++)
            <p>{{ $pizzas[$i]['type'] }}</p>
        @endfor

    </div>
</div>
@endsection
