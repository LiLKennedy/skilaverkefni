@extends ('layout')

@section ('content')
    <form action="">
        <div>Submit Moviesssss</div>
        <input type="text" name="name" placeholder="Name">
        <input type="number" min="0" value="5" max="10" step="0.1" name="rating" value="5">
        <input type="text" name="genre" placeholder="Genre">
        <input type="text" name="description" placeholder="Description">
        <input type="file" name="poster" >
        <input type="date" name="release_date">
        <input type="text" name="slug"  placeholder="Slug">
    </form>
@endsection