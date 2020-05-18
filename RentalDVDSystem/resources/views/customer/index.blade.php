<!DOCTYPE html>
<head>
  <title>Customer一覧画面</title>
</head>
<body>
<h1>Customer一覧</h1>
<table>
  <tr>
    <th>Customer ID</th>
    <th>Store ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Address ID</th>
    <th>Active</th>
    <th>Create Date</th>
    <th>Last Update</th>
  </tr>
  @foreach ($customers as $customer)
  <tr>
    <td>{{$customer->customer_id}}</td>
    <td>{{$customer->store_id}}</td>
    <td>{{$customer->first_name}}</td>
    <td>{{$customer->last_name}}</td>
    <td>{{$customer->email}}</td>
    <td>{{$customer->address_id}}</td>
    <td>{{$customer->active}}</td>
    <td>{{$customer->create_date}}</td>
    <td>{{$customer->last_update}}</td>
  </tr>
  @endforeach
</table>
{!! $customers->links() !!}
</body>
</html>