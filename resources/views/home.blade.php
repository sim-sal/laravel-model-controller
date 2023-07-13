@extends('layouts.main-layout')

@section('content')
    <main>
        <div id="main">
            <div class="container">
                <h1 class="text-center">BEST MOVIES IN THE WORLD</h1>
                <div class="row justify-content-center my-5">
                    @foreach ($movies as $movie)
                        <div class="col-lg-3 col-md-4 my-3 mx-2 text-center card">
                            <span class="text-start"><span>id: </span><strong>{{ $movie->id }}</strong></span>
                            <hr>
                            <h3 class="card_title">{{ $movie->title }}</h3>
                            <div class="my-4">
                                <h5>Original title:</h5>
                                <span><strong>{{ $movie->original_title }}</strong></span>
                            </div>
                            <div class="row movie-info">
                                <div class="col-4">
                                    <h6>Nationality:</h6>
                                    <span>{{ $movie->nationality }}</span>
                                </div>
                                <div class="col-4 exit-date">
                                    <h6>Exit date:</h6>
                                    <span>{{ $movie->date }}</span>
                                </div>
                                <div class="col-4">
                                    <h6>Vote:</h6>
                                    <span>{{ $movie->vote }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
