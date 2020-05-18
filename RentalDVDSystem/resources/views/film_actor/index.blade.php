<!DOCTYPE html>
<head>
  <title>Film Actor一覧画面</title>
</head>
<body>
<h1>Film Actor一覧</h1>
<table>
  <tr>
    <th>Actor ID</th>
    <th>Film ID</th>
    <th>Last Update</th>
  </tr>
  @foreach ($film_actors as $film_actor)
  <tr>
    <td>{{$film_actor->actor_id}}</td>
    <td>{{$film_actor->film_id}}</td>
    <td>{{$film_actor->last_update}}</td>
  </tr>
  @endforeach
</table>
{!! $film_actors->links() !!}
</body>
</html>