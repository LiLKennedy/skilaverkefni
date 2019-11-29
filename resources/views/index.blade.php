@extends ('layout')

@section ('content')
    @foreach ($movies as $movie)
        <div>{{$movie->name}}</div>
        <div>{{$movie->poster}}</div>
        <div>{{$movie->rating}}</div>
        <div>{{$movie->description}}</div>
        <div>{{$movie->genre}}</div>  
    @endforeach
@endsection