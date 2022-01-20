@extends('layouts.app')
@section('pag-title', 'Blog')
@section('content')

<div class="container">
    <h2 class="text-center">
        Posts Page
    </h2>

    <div>
        @foreach($posts as $post)
         <div class="col">
             <div class="card">
                <h4>Testo post: {{ $post->text }}</h4>
                <h4>Autore post: {{ $post->author }}</h4>
                <h4>Data post: {{ $post->date_post }}</h4>
             </div>
         </div>
         <hr>
        @empty
        <p>Mi dispiace, nulla da mostrare</p>
        @endforeach 
    </div>
</div>
@endsection




