<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>All posts!!</H1>
    <a href="{{route('posts.create')}}">Create new post</a>
    @foreach($posts as $post)
    <DIv>
    <H2>{{$post->title}}</H2>
    <H6>{{$post->body}}</H6>
    <a href="{{route('posts.edit',$post->id)}}">Edit</a>
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit"
            onclick="return confirm('Are you sure you want to delete this post?')">
        DELETE
    </button>
</form>
    </DIv>
    
    @endforeach
</body>
</html>
