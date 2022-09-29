@extends('layout.app')

@section('title', 'Elenco dei film')

@section('content')
    <h1>Lista dei Treni:</h1>

    <ul>
        @foreach ($trains as $train)
            <li>
                {{$train->id}} <span> della compagnia </span> {{$train->company}} <span> in partenza da </span> {{$train->departures_station}} <span> alle ore </span> {{$train->departures_time}} <span> arriverà a </span> {{$train->arrival_station}} <span> alle ore </span> {{$train->arrival_time}}
            </li>
        @endforeach
    </ul>

    

@endsection
