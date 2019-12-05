@extends ('layout')
@section('title', 'Add a Movie')
@section('theme')
    @parent
    <link rel="stylesheet" href="/css/create.css">
@endsection

@section ('background')
    @parent
@endsection

@section ('content')
    <a href="/" class="goback material-icons">keyboard_backspace</a>
        
    <form method="POST" action="/" id="create" enctype="multipart/form-data">
        @csrf
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
                    <input id="moviePoster" type="file" name="poster" style="line-height: 2.25;">
                </div>
            </div>
            <div id="midRight">
                <div>
                    <label for="movieReleasedate">Release Date</label>
                    <input id="movieReleasedate" type="date" name="release_date">
                </div>
                <div>
                    <label for="rating">Movie Rating</label>
                    <div>
                        <div class="btn material-icons" @click="decreaseValue">remove</div>
                        <input id="movieRating" type="number" v-model="ratingValue" name="rating">
                        <div class="btn material-icons" @click="increaseValue">add</div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div id="bottom">
            <label for="movieDescription">Short Text About The Movie</label>
            <textarea id="movieDescription" type="text" name="description"></textarea>
        </div>
        <button type="submit" class="submitbutton">Submit Movie</button>
    </form>
@endsection
