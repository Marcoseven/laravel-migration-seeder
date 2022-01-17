@extends('layouts.app')
@section('pag-title', 'Trips HomePage')
@section('content')

<div class="container">
    <h1 class="text-center">
        Our trips
    </h1>
</div>

<section class="trips">
    @forelse($trips as $trip)
        <h4>Località: {{ $trip->locality }}</h4>
        <h4>Giorno di partenza: {{ $trip->departure_date }}</h4>
        <h4>Numero di giorni: {{ $trip->number_of_days }}</h4>
        <hr>
        @empty
        <p>Mi dispiace, nulla da mostrare</p>
    @endforelse 
</section>
@endsection