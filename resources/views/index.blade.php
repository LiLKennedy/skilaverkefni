@extends ('layout')
@section('title', 'Movies')
@section('theme')
    @parent
    <link rel="stylesheet" href="../css/index.css">
@endsection

@section ('background')
    @parent
@endsection

@section ('content')
    <div id="movies">
        <div class="movie-container">
            <a href="movies/create" id="addMovieCard" class="material-icons">add_circle_outline <div class="tooltip">ADD A MOVIE</div></a>
            
        </div>
        @foreach ($movies as $movie)
        <div class="movie-container">
            <div class="movie" style="background-image: url('../{{ $movie->poster }}');">
                <div class="top">
                    <div class="year">{{ substr($movie->release_date, 0, -6) }}</div>

                    @if ($movie->rating >= 7)
                    <div class="rating good-rating">{{ $movie->rating }}</div>
                    @elseif ( $movie->rating >= 5 && $movie->rating <= 7)
                    <div class="rating average-rating">{{ $movie->rating }}</div>
                    @else ( $movie->rating <= 3)
                    <div class="rating bad-rating">{{ $movie->rating }}</div>
                    @endif
                </div>
                <div class="middle">
                    <a href="movies/{{ $movie->slug }}" class="button">More Info</a>
                </div>
                <div class="bottom">
                    <div class="title">{{ $movie->name }}</div>
                </div>
                
                <div class="movieBackground"></div>
            </div>
        </div>
        @endforeach
    </div>
    
@endsection