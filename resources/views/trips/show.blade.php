@extends('layouts.app')
@section('pag-title', 'Trips')
@section('content')

<div class="container">
    <h2 class="text-center">
        Trip Page
    </h2>
    <section class="trip">
        <h4>Località: {{ $trip->location }}</h4>
        <h4>Numero di giorni: {{ $trip->duration }}</h4>
        <h4>Giorno di partenza: {{ $trip->departure_date }}</h4>
    </section>
</div>
@endsection