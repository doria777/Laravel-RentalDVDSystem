<!DOCTYPE html>
<head>
  <title>Country一覧画面</title>
</head>
<body>
<h1>Country一覧</h1>
<table>
  <tr>
    <th>Country ID</th>
    <th>Country</th>
    <th>Last Update</th>
  </tr>
  @foreach ($countries as $country)
  <tr>
    <td>{{$country->country_id}}</td>
    <td>{{$country->country}}</td>
    <td>{{$country->last_update}}</td>
  </tr>
  @endforeach
</table>
{!! $countries->links() !!}
</body>
</html>