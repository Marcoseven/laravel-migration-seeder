@extends('layouts.app')
@section('pag-title', 'Post')
@section('content')

<div class="container">
    <h2 class="text-center">
        Post Page
    </h2>
    <section class="post">
        <h4>Testo post: {{ $post->text }}</h4>
        <h4>Autore post: {{ $post->author }}</h4>
        <h4>Data post: {{ $post->date_post }}</h4>
    </section>
</div>
@endsection