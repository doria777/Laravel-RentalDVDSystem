<!DOCTYPE html>
<head>
  <title>Film Category一覧画面</title>
</head>
<body>
<h1>Film Category一覧</h1>
<table>
  <tr>
    <th>Film ID</th>
    <th>Category ID</th>
    <th>Last Update</th>
  </tr>
  @foreach ($film_categories as $film_category)
  <tr>
    <td>{{$film_category->film_id}}</td>
    <td>{{$film_category->category_id}}</td>
    <td>{{$film_category->last_update}}</td>
  </tr>
  @endforeach
</table>
{!! $film_categories->links() !!}
</body>
</html>