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
    <form action="{{route('posts.update',$post->id)}}" method="POST">
        <input type="hidden" name="_token" value={{csrf_token()}}>
        <input type="hidden" name="_method" value="PUT">

        <div class="d-flex justify-content-center">
            <h1>Edit Post</h1>
        </div>

        <div class="input-group my-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Title</span>
            </div>
            <input type="text" class="form-control" value="{{$post->title}}" name="title">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Description</span>
            </div>
            <input type="text" class="form-control" value="{{$post->title}}" name="description">
        </div>
        <div>
            <textarea name="content" class="form-control " id="ckeditor">{{$post->content}}</textarea>
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary btn-lg mt-3">Edit Complete</button>
        </div>
    </form>


    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('ckeditor');
    </script>

</body>

</html>