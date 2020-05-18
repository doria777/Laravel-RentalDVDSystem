<!DOCTYPE html>
<head>
  <title>Category一覧画面</title>
</head>
<body>
<h1>Category一覧</h1>
<table>
  <tr>
    <th>Category ID</th>
    <th>Name</th>
    <th>Last Update</th>
  </tr>
  @foreach ($categories as $category)
  <tr>
    <td>{{$category->category_id}}</td>
    <td>{{$category->name}}</td>
    <td>{{$category->last_update}}</td>
  </tr>
  @endforeach
</table>
{!! $categories->links() !!}
</body>
</html>