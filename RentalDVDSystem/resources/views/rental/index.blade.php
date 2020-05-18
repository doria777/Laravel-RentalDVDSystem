<!DOCTYPE html>
<head>
  <title>Rental一覧画面</title>
</head>
<body>
<h1>Rental一覧</h1>
<table>
  <tr>
    <th>Rental ID</th>
    <th>Rental date</th>
    <th>Inventory ID</th>
    <th>Customer ID</th>
    <th>Return Date</th>
    <th>Staff ID</th>
    <th>Last Update</th>
  </tr>
  @foreach ($rentals as $rental)
  <tr>
    <td>{{$rental->rental_id}}</td>
    <td>{{$rental->rental_date}}</td>
    <td>{{$rental->inventory_id}}</td>
    <td>{{$rental->customer_id}}</td>
    <td>{{$rental->return_date}}</td>
    <td>{{$rental->staff_id}}</td>
    <td>{{$rental->last_update}}</td>
  </tr>
  @endforeach
</table>
{!! $rentals->links() !!}
</body>
</html>