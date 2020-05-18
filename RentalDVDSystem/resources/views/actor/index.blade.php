<!DOCTYPE html>
<head>
  <title>Actor一覧画面</title>
</head>
<body>
<h1>Actor一覧</h1>
<table>
  <tr>
    <th>Actor ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Last Update</th>
  </tr>
  @foreach ($actors as $actor)
  <tr>
    <td>{{$actor->actor_id}}</td>
    <td>{{$actor->first_name}}</td>
    <td>{{$actor->last_name}}</td>
    <td>{{$actor->last_update}}</td>
  </tr>
  @endforeach
</table>
{!! $actors->links() !!}
</body>
</html>