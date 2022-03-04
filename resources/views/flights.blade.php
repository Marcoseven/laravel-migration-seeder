@extends('layouts.app')
@section('content')
    <main>
        <div class="title">
            <h1>
                Flights
            </h1>
        </div>

        <section>
            <div class="row pt-3 justify-content-center">
                @foreach ($flights as $flight)
                    <div class="card m-3" style="width: 18rem;">
                        <img class="card-img-top" src="{{ $flight->poster }}" alt="{{ $flight->destination }} picture">
                        <div class="card-body">
                            <h4 class="card-title">
                                {{ $flight->destination }}
                            </h4>
                            <h5>
                                Airlines: {{ $flight->airline }}
                            </h5>
                            <h6>
                                Flight Duration: {{ $flight->flight_duration }}
                            </h6>
                            <div class="d-flex align-items-center justify-content-evenly">
                                <h5 class="m-0">
                                    Price: {{ $flight->price }}&euro;
                                </h5>
                                <a href="#" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection
