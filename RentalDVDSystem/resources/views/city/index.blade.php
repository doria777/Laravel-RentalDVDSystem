<!DOCTYPE html>
<head>
  <title>City一覧画面</title>
</head>
<body>
<h1>City一覧</h1>
<table>
  <tr>
    <th>City ID</th>
    <th>CIty</th>
    <th>Country ID</th>
    <th>Last Update</th>
  </tr>
  @foreach ($cities as $city)
  <tr>
    <td>{{$city->city_id}}</td>
    <td>{{$city->city}}</td>
    <td>{{$city->country_id}}</td>
    <td>{{$city->last_update}}</td>
  </tr>
  @endforeach
</table>
{!! $cities->links() !!}
</body>
</html>