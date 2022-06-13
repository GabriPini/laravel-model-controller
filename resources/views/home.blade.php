@extends('layouts.app')

@section('content')

<section id="ms_movies" class="container mt-5 mb-5">

    <div class="row row-cols-1  row-cols-sm-2 row-cols-md-3  justify-content-center">

        @foreach ($movies as $movie)

        <div class="col my_card text-center ">
            <h5>Titolo: <br><span class="my_pm">{{ $movie->title }}</span></h5>
            <p>Titolo originale: <br><span class="my_pm">{{ $movie->original_title }}</span></p>
            <p>Nazionalità: <br><span class="my_pm">{{ $movie->nationality }}</span> <p>
            <p>Data di uscita: <br><span class="my_pm">{{ $movie->date }}</span></p>
            <p>Voto medio degli utenti: <br><span class="my_pm">{{ $movie->vote }}</span></p>
        </div>


        @endforeach

    </div>

</section>


@endsection
