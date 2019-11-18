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

    <div class="container">
        <div class="row">
            <div class="col-2 d-flex align-items-center">
                <form action="{{route('articles.index')}}">
                    <button type="submit" class="btn btn-primary">Back to Home</button>
                </form>
            </div>
            <div class="col-8 d-flex justify-content-center
            align-items-center">
                <h1>
                    {{$article->title}}
                </h1>
            </div>
        </div>
    </div>

    <div class="container my-4">
        <h4>
            {{$article->description}}
        </h4>
    </div>

</body>

</html>