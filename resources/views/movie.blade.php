@extends ('layout')
@section('title', $movie->name)
@section('theme')
    @parent
    <link rel="stylesheet" href="../css/movie-info.css">
@endsection

@section ('background')
    <div id="background" style="background: linear-gradient(rgb(47, 47, 64), rgba(14, 16, 20, 0.9), rgb(14, 16, 20)), url('../img/{{ $movie->poster }}.jpg');"></div>
@endsection

@section ('content')
    <a href="/" class="goback material-icons">keyboard_backspace</a>
    <div id="movie">
        <div id="left">
            <img src="../img/{{ $movie->poster }}.jpg" alt="Movie Poster">
        </div>
        <div id="right">
            <div id="info">
                <div id="top">
                    <div class="name">{{ $movie->name }}</div>
                    <div>
                        @if ($movie->rating >= 7)
                        <div class="rating good-rating">{{ $movie->rating }}</div>
                        @elseif ( $movie->rating >= 5 && $movie->rating <= 7)
                        <div class="rating average-rating">{{ $movie->rating }}</div>
                        @else ( $movie->rating <= 3)
                        <div class="rating bad-rating">{{ $movie->rating }}</div>
                        @endif

                        <a href="#" class="trailer">Watch Trailer</a>
                    </div>
                </div>
                <div id="middle">
                    <h3 class="title">Description</h3>
                    <div class="description">{{ $movie->description }}</div>
                </div>
                <div id="bottom">
                    <div>
                        <h3 class="title">Release Date</h3>
                        <div class="releaseDate">{{ date('d-m-Y', strtotime($movie->release_date)) }}</div>
                    </div>
                    
                    <div>
                        <h3 class="title">Genres</h3>
                        <div class="genre">{{ $movie->genre }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div></div>
    
@endsection