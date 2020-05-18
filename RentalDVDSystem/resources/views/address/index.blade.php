<!DOCTYPE html>
<head>
  <title>Address一覧画面</title>
</head>
<body>
<h1>Address一覧</h1>
<table>
  <tr>
    <th>Address ID</th>
    <th>Address</th>
    <th>Address2</th>
    <th>District</th>
    <th>City ID</th>
    <th>Postal Code</th>
    <th>Phone</th>
    <th>Lcation</th>
    <th>Last Update</th>
  </tr>
  @foreach ($addresses as $address)
  <tr>
    <td>{{$address->address_id}}</td>
    <td>{{$address->address}}</td>
    <td>{{$address->address2}}</td>
    <td>{{$address->district}}</td>
    <td>{{$address->city_id}}</td>
    <td>{{$address->postal_code}}</td>
    <td>{{$address->phone}}</td>
    <td>{{$address->location}}</td>
    <td>{{$address->last_update}}</td>
  </tr>
  @endforeach
</table>
{!! $addresses->links() !!}
</body>
</html>