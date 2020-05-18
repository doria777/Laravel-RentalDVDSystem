<!DOCTYPE html>
<head>
  <title>Store一覧画面</title>
</head>
<body>
<h1>Store一覧</h1>
<table>
  <tr>
    <th>Store ID</th>
    <th>Manager Staff ID</th>
    <th>Address ID</th>
    <th>Last Update</th>
  </tr>
  @foreach ($stores as $store)
  <tr>
    <td>{{$store->store_id}}</td>
    <td>{{$store->manager_staff_id}}</td>
    <td>{{$store->address_id}}</td>
    <td>{{$store->last_update}}</td>
  </tr>
  @endforeach
</table>
{!! $stores->links() !!}
</body>
</html>