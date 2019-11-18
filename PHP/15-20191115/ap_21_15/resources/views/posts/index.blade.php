<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Content</th>
                <th>Action</th>
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
                    <div style="display: flex;">
                        <form action="{{route('posts.show',$post->id)}}" style="margin: 0 10px;">
                            <button type="submit">Xem</button>
                        </form>
                        <form action="{{route('posts.edit',$post->id)}}" style="margin: 0 10px;">
                            <button type="submit">Sua</button>
                        </form>
                        <form action="{{route('posts.destroy',$post->id)}}" style="margin: 0 10px;" method="POST">
                            <input type="hidden" name="_token" value={{csrf_token()}}>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit">Xoa</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


    <form action="{{route('posts.create')}}">
        <button type="submit">New Post</button>
    </form>
</body>

</html>