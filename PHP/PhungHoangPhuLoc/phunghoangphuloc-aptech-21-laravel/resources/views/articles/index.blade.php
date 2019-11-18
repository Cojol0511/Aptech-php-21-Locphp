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
                <th>Function</th>

            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->title}}</td>
                <td>{!! $article->description !!}</td>
                <td>
                    <div class="d-flex">
                        <form action="{{route('articles.show',$article->id)}}" style="margin: 0 10px;">
                            <button type="submit" class="btn btn-outline-info">Show</button>
                        </form>
                        <form action="{{route('articles.edit',$article->id)}}" style="margin: 0 10px;">
                            <button type="submit" class="btn btn-outline-warning">Edit</button>
                        </form>
                        <form action="{{route('articles.destroy',$article->id)}}" style="margin: 0 10px;" method="POST">
                            <input type="hidden" name="_token" value={{csrf_token()}}>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

<div class="col-12 d-flex justify-content-center">
<form action="{{route('articles.create')}}">
    <button type="submit" class="btn btn-primary btn-lg">New Article</button>
    </form>
</div>

</body>

</html>