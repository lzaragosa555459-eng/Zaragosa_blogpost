<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Create Post</h1>
        
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
        
            <label>Title:</label><br>
            <input type="text" name="title"><br><br>
        
            <label>Body:</label><br>
            <textarea name="body"></textarea><br><br>
        
            <button type="submit" class="save-btn">Save</button>
          <a href="{{ route('posts.index') }}" class="cancel-btn">Cancel</a>

            
    </div>
 
</form>
</body>
</html>