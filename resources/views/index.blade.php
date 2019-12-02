@extends ('layout')

@section ('content')
    <div id="addMovie">ADD MOVIE</div>
        <div id="movies">
            @foreach ($movies as $movie)
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
                    <div class="button">More Info</div>
                </div>
                <div class="bottom"></div>
                
                <div class="movieBackground"></div>
            </div>
            @endforeach
        </div>
    </div>
    
@endsection

<!-- <div class="movie" style="background-image: linear-gradient(to right, rgba(0,0,0,0.5), var(--bg-movie)), url('https://cdn.shopify.com/s/files/1/1416/8662/products/Elf_2003_original_film_art_2000x.jpg?v=1565763489')">
                <div class="left">
                    <h2 class="movieTitle">{{$movie->name}}</h2>
                    @if ($movie->rating >= 7)
                    <h2 class="movieRating" style="color: green;">{{$movie->rating}}</h2>
                    @elseif ( $movie->rating >= 5 && $movie->rating <= 7)
                    <h2 class="movieRating" style="color: orange;">{{$movie->rating}}</h2>
                    @else ( $movie->rating <= 3)
                    <h2 class="movieRating" style="color: red;">{{$movie->rating}}</h2>
                    @endif
                </div>
                <div class="center">
                    <div class="movieDesc">{{$movie->description}}</div>
                </div>
                <div class="right">
                    <div class="movieGenre">{{$movie->genre}}</div>  
                </div>
                
            </div> -->