@extends('layout.app')

@section('title', 'Elenco dei film')

@section('content')
    <h1>Lista dei Treni:</h1>

    <ul>
        @foreach ($trains as $train)
            <li>
                {{$train->id}} <span> della compagnia </span> {{$train->company}} <span> in partenza da </span> {{$train->departures-station}} <span> alle ore </span> {{$train->departures-time}} <span> arriverà a </span> {{$train->arrival-station}} <span> alle ore </span> {{$train->arrival-time}}
            </li>
        @endforeach
    </ul>

    

@endsection
