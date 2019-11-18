<form action="{{route('posts.update',$post->id)}}" method="POST">
    <input type="hidden" name="_token" value={{csrf_token()}}>
    <input type="hidden" name="_method" value="PUT">
    <div>
        <label> Title </label>
        <input type="text" name="title" value="{{$post->title}}">
    </div>
    <div>
        <label> Description </label>
        <input type="text" name="description" value="{{$post->description}}">
    </div>
    <div>
        <textarea name="content" class="form-control " id="ckeditor">{{$post->content}}</textarea>
    </div>
    <button type="submit">Update Post</button>
    <div>
</form>




<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('ckeditor');
</script>