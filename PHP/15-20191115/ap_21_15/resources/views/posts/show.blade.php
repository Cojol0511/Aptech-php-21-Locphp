<h1>
    {{$post->title}}
</h1>
<h3>
    {{$post->description}}
</h3>
<p>
    {!! $post->content !!}
</p>

<form action="{{route('posts.index')}}">
    <button type="submit">Back to Home</button>
</form>