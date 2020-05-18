<!DOCTYPE html>
<head>
  <title>Film一覧画面</title>
</head>
<body>
<h1>Film一覧</h1>
<table>
  <tr>
    <th>Film ID</th>
    <th>Title</th>
    <th>Description</th>
    <th>Release Year</th>
    <th>Language ID</th>
    <th>Original Language ID</th>
    <th>Rental Duration</th>
    <th>Rental Rate</th>
    <th>Length</th>
    <th>Replacement Cost</th>
    <th>Rating</th>
    <th>Special Features</th>
    <th>Last Update</th>
  </tr>
  @foreach ($films as $film)
  <tr>
    <td>{{$film->film_id}}</td>
    <td>{{$film->title}}</td>
    <td>{{$film->description}}</td>
    <td>{{$film->release_year}}</td>
    <td>{{$film->language_id}}</td>
    <td>{{$film->original_language_id}}</td>
    <td>{{$film->rental_duration}}</td>
    <td>{{$film->rental_rate}}</td>
    <td>{{$film->length}}</td>
    <td>{{$film->replacement_cost}}</td>
    <td>{{$film->rating}}</td>
    <td>{{$film->special_features}}</td>
    <td>{{$film->last_update}}</td>
  </tr>
  @endforeach
</table>
{!! $films->links() !!}
</body>
</html>