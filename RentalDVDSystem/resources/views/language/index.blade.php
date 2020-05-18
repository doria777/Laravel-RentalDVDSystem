<!DOCTYPE html>
<head>
  <title>Language一覧画面</title>
</head>
<body>
<h1>Language一覧</h1>
<table>
  <tr>
    <th>Language ID</th>
    <th>Name</th>
    <th>Last Update</th>
  </tr>
  @foreach ($languages as $language)
  <tr>
    <td>{{$language->language_id}}</td>
    <td>{{$language->name}}</td>
    <td>{{$language->last_update}}</td>
  </tr>
  @endforeach
</table>
{!! $languages->links() !!}
</body>
</html>