@extends('layouts.base')

{{-- @section('pageTitle', 'Lista dei film') --}}

@section('pageTitle', 'Lista viaggi')

@section('content')

    {{-- qui ci va il ciclo per stampare tutto il contenuto del db cioè tutti i miei film --}}
    @foreach ($travels as $travel)
        <div class="title">
            <h1>{{$travel->city}} - {{$travel->address}}</h1>
            <p>{{$travel->description}}</p>
        </div>
        <div class="info">
            <h2>{{$travel->type}}</h2>
            <ul>
                <li>{{$travel->departure}}</li>
                <li>{{$travel->arrivals}}</li>
                <li>{{$travel->price}}</li>
                <li>{{$travel->departure_time}}</li>
                <li>{{$travel->arrivals_time}}</li>
            </ul>
        </div>
    @endforeach
@endsection