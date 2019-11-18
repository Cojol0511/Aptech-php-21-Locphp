<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Content</th>
                <th>Function</th>

            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td>{!! $post->content !!}</td>
                <td>
                    <div class="d-flex">
                        <form action="{{route('posts.show',$post->id)}}" style="margin: 0 10px;">
                            <button type="submit" class="btn btn-outline-info">Info</button>
                        </form>
                        <form action="{{route('posts.edit',$post->id)}}" style="margin: 0 10px;">
                            <button type="submit" class="btn btn-outline-warning">Edit</button>
                        </form>
                        <form action="{{route('posts.destroy',$post->id)}}" style="margin: 0 10px;" method="POST">
                            <input type="hidden" name="_token" value={{csrf_token()}}>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-outline-danger">Remove</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

<div class="col-12 d-flex justify-content-center">
<form action="{{route('posts.create')}}">
    <button type="submit" class="btn btn-primary btn-lg">New Post</button>
    </form>
</div>

</body>

</html>