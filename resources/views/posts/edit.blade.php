<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>Edit post</H1>
    <form action="{{route('posts.update',$post->id)}}" method="POST">
        @csrf
        @method('PUT')
  <!-- Title field -->
  <label for="title">Title:</label><br>
  <input type="text" id="name" name="title" value= "{{old('title'),$post->title}}" placeholder="Enter your name" required><br><br>

  <!-- body field -->
  <label for="body">Body:</label><br>
  <textarea name="body" id="">{{old('body'),$post->body}}</textarea>

  <!-- Submit button -->
  <button type="submit">Update</button>
</form>
</body>
</html>
