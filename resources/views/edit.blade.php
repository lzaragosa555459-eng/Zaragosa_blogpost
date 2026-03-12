<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     
<div class="container">
        <h1>Edit Post</h1>
    
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
    
        <label>Title:</label><br>
        <input type="text" name="title" value="{{ $post->title }}"><br><br>
    
        <label>Body:</label><br>
        <textarea name="body">{{ $post->body }}</textarea><br><br>
    
        <button type="submit">Update</button>
    </form>
</div>

</body>
</html>