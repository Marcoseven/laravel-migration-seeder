@extends('layouts.app')
@section('pag-title', 'HomePage')
@section('content')

<div class="container">
    <h2 class="text-center">
        Trips Page   
    </h2>
    <div>
        @forelse($trips as $trip)
         <div class="col">
             <div class="card">
                <h4>Località: {{ $trip->location }}</h4>
                <h4>Numero di giorni: {{ $trip->duration }}</h4>
                <h4>Giorno di partenza: {{ $trip->departure_date }}</h4>
             </div>
         </div>
         <hr>
         @empty
        <p>Mi dispiace, nulla da mostrare</p>
         @endforelse 
    </div>
</div>
@endsection




