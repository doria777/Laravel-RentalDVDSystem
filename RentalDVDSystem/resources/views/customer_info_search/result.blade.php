<!DOCTYPE html>
<head>
  <title>顧客情報検索結果画面</title>
</head>
<body>
<h1>顧客情報検索結果</h1>
<table>
  <tr>
    <th>顧客ID</th>
    <th>顧客（名）</th>
    <th>顧客（姓）</th>
    <th>Eメール</th>
    <th>国</th>
    <th>都市</th>
    <th>住所1</th>
    <th>住所2</th>
  </tr>
  @foreach ($results as $result)
  <tr>
    <td>{{$result->customer_id}}</td>
    <td>{{$result->first_name}}</td>
    <td>{{$result->last_name}}</td>
    <td>{{$result->email}}</td>
    <td>{{$result->country}}</td>
    <td>{{$result->city}}</td>
    <td>{{$result->address}}</td>
    <td>{{$result->address2}}</td>
  </tr>
  @endforeach
</table>
{!! $results->links() !!}
</body>
</html>