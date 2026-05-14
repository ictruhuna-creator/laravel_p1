<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
  <!-- Title field -->
  <label for="title">Title:</label><br>
  <input type="text" id="name" name="title" value= "{{old('title')}}" placeholder="Enter your name" required><br><br>

  <!-- body field -->
  <label for="body">Body:</label><br>
  <textarea name="body" id="">{{old('body')}}</textarea>

  <!-- Submit button -->
  <button type="submit">Save</button>
</form>
@if($errors->any())
<Ul>
    @foreach($errors->all() as $error)
    <Li>{{ $error }}</Li>
    @endforeach
</Ul>
@endif
</body>
</html>
