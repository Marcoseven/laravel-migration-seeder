@extends('layouts.app')
@section('content')

<div class="container">
    <h1>
        Pacchetti di viaggio offerti
    </h1>

    @forelse($trips as $trip)
        <h4>Località: {{ $trip->locality }}</h4>
        <h4>Giono di partenza: {{ $trip->departure_date }}</h4>
        <h4>Numero di giorni: {{ $trip->number_of_days }}</h4>
        <hr>
        @empty
        <p>Mi dispiace, nulla da mostrare</p>
    @endforelse
</div>
@endsection