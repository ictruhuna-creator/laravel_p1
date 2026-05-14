<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #BFDDF0;
        }

        .container {
            width: 80vw;
            height: 80vh;
            /* border: 1px solid red; */
            border-radius: 40px;
            overflow: hidden;
            background-color: #8CC0EB;
        }

        nav {
            width: 100%;
            display: flex;
            height: 80px;

        }

        nav>ul {
            display: flex;
        }
    </style>
    <div class="container">
        <nav>
            <ul>
                <li>.......</li>
                <li>.......</li>
                <li>.......</li>
                <li>......</li>
            </ul>
        </nav>
        <img src={{ asset('images/1.jpeg') }} alt="" width="500">

        <div class="">

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

                    <button type="submit" onclick="return confirm('Are you sure you want to delete this post?')">
                        DELETE
                    </button>
                </form>
            </DIv>

            @endforeach

        </div>
    </div>
</body>

</html>