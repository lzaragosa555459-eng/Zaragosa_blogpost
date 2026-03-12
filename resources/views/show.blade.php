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
<h1 class="title">{{ $post->title }}</h1>
 
<p>{{ $post->body }}</p>
 
<a href="{{ route('posts.index') }}">Back</a>
 </div>

</body>
</html>