<!DOCTYPE html>
<head>
  <title>Inventory一覧画面</title>
</head>
<body>
<h1>Inventory一覧</h1>
<table>
  <tr>
    <th>Inventory ID</th>
    <th>Film ID</th>
    <th>Store ID</th>
    <th>Last Update</th>
  </tr>
  @foreach ($inventories as $inventory)
  <tr>
    <td>{{$inventory->inventory_id}}</td>
    <td>{{$inventory->film_id}}</td>
    <td>{{$inventory->store_id}}</td>
    <td>{{$inventory->last_update}}</td>
  </tr>
  @endforeach
</table>
{!! $inventories->links() !!}
</body>
</html>