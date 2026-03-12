<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <h1>Blog Posts</h1>
 
   
        <a href="{{ route('posts.create') }}">Create New Post++</a>
         <div class="container">
        @if(session('success'))
            <p style="color:green;">{{ session('success') }}</p>
        @endif
        
        @foreach($posts as $post)
            <hr>
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->body }}</p>
        
            <a href="{{ route('posts.show', $post->id) }}">View</a>
            <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
        
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        @endforeach
    </div>

</body>
</html>