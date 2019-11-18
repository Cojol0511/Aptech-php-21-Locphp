 
<form action="{{route('posts'}}" method="POST">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <div>
    <label for="">Name</label>
    <input type="text" name="name" value="">
  </div>
  <div>
    <label for="">Email</label>
    <input type="email" name="email">
  </div>
  <div>
    <label for="">Password</label>
    <input type="password" name="password">
  </div>
  <button type="submit">Dang Ky Tai Khoan</button>
</form>
