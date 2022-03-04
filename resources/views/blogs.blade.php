@extends('layouts.app')
@section('content')

    <main>
        <div class="title">
            <h1>
                News
            </h1>
        </div>

        <section>
            <div class="row pt-3 justify-content-center">
                @foreach ($blogs as $blog)
                    <a class="d-flex justify-content-center" href="{{ route('blog', ['blog' => $blog->id]) }}">
                        <div class="card m-3" style="width: 50%;">
                            <img class="card-img-top" src="{{ $blog->image }}" alt="">
                            <div class="card-body">
                                <h6 class="date">
                                    {{ $blog->post_date }}
                                </h6>
                                <h4 class="card-title">
                                    {{ $blog->title }}
                                </h4>

                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    </main>


@endsection
