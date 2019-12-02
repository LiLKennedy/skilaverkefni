@extends ('layout')

@section ('content')
    <a href="movies/create" id="addMovie">ADD MOVIE</a>
        <div id="movies">
            @foreach ($movies as $movie)
            <div class="movie-container">
                <div class="movie" style="background-image: url('img/{{ $movie->poster }}.jpg');">
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
                    <div class="bottom"></div>
                    
                    <div class="movieBackground"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
@endsection