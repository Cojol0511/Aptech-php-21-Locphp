<table>
  <thead>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>email</th>
      <th>chuc nang</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td style="display:flex;">
        <form action="http://localhost:8000/users/{{$user->id}}">
          <button type="submit">Xem chi tiet</button>
        </form>
        <form action="{{route('users.edit', $user->id)}}">
          <button type="submit">Thay doi</button>
        </form>
        <form action="{{route('users.destroy', $user->id)}}" method="POST">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit">Xoa</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<form action="http://localhost:8000/users/create">
  <button type="submit">Tao Nguoi Dung Moi</button>
</form>