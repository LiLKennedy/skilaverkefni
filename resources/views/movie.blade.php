@extends ('layout')

@section ('content')
    
    <div>{{$movie->name}}</div>
    <div>{{$movie->poster}}</div>
    <div>{{$movie->rating}}</div>
    <div>{{$movie->description}}</div>
    <div>{{$movie->genre}}</div>
    
@endsection