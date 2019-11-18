 <form action="{{route('posts.index')}}" method="POST">
     <input type="hidden" name="_token" value="{{csrf_token()}}">
     <div>
         <label> Title </label>
         <input type="text" name="title">
     </div>
     <div>
         <label> Description </label>   
         <input type="text" name="description">
     </div>
     <div>
         <textarea name="content" class="form-control " id="ckeditor"></textarea>
     </div>
     <button type="submit">Create New Post</button>
     <div>
 </form>


 <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
 <script>
     CKEDITOR.replace('ckeditor');
 </script>