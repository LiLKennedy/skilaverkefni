@extends ('layout')
@section('title', 'Add a Movie')
@section('theme')
    @parent
    <link rel="stylesheet" href="../css/create.css">
@endsection

@section ('background')
    @parent
@endsection

@section ('content')
    <a href="/" class="goback material-icons">keyboard_backspace</a>
        
    <form action="" id="create">
        <div class="header">Add a Movie</div>
        <div id="top">
            <label for="name">Movie Title</label>
            <input type="text" name="name">
        </div>
        <div id="middle">
            <div id="midLeft">
                <div>
                    <label for="movieGenre">Movie Genres</label>
                    <input id="movieGenre" type="text" name="genre"> 
                </div>
                <div>
                    <label for="moviePoster" id="posterUpload">Movie Poster</label>  
                    <input id="moviePoster" type="file" name="poster">
                </div>
            </div>
            <div id="midRight">
                <div>
                    <label for="movieRating">Movie Rating</label>
                    <input id="movieRating" type="number" min="0" value="5" max="10" step="0.1" name="rating">
                </div>
                <div>
                    <label for="movieReleasedate">Release Date</label>
                    <input id="movieReleasedate" type="date" name="release_date">
                </div>
                
                
            </div>
        </div>
        <div id="bottom">
            <label for="movieDescription">Short Text About The Movie</label>
            <textarea id="movieDescription" type="text" name="description"></textarea>
        </div>
    </form>
@endsection