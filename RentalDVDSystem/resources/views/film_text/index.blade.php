<!DOCTYPE html>
<head>
  <title>Film Text一覧画面</title>
</head>
<body>
<h1>Film Text一覧</h1>
<table>
  <tr>
    <th>Film ID</th>
    <th>Title</th>
    <th>Description</th>
  </tr>
  @foreach ($film_texts as $film_text)
  <tr>
    <td>{{$film_text->film_id}}</td>
    <td>{{$film_text->title}}</td>
    <td>{{$film_text->description}}</td>
  </tr>
  @endforeach
</table>
{!! $film_texts->links() !!}
</body>
</html>