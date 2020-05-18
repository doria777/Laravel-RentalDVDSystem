<!DOCTYPE html>
<head>
  <title>Staff一覧画面</title>
</head>
<body>
<h1>Staff一覧</h1>
<table>
  <tr>
    <th>Staff ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Address</th>
    <th>Picture</th>
    <th>Email</th>
    <th>Store_id</th>
    <th>Active</th>
    <th>Username</th>
    <th>Password</th>
    <th>Last Update</th>
  </tr>
  @foreach ($staffs as $staff)
  <tr>
    <td>{{$staff->staff_id}}</td>
    <td>{{$staff->first_name}}</td>
    <td>{{$staff->last_name}}</td>
    <td>{{$staff->address}}</td>
    <td>{{$staff->picture}}</td>
    <td>{{$staff->email}}</td>
    <td>{{$staff->store_id}}</td>
    <td>{{$staff->active}}</td>
    <td>{{$staff->username}}</td>
    <td>{{$staff->password}}</td>
    <td>{{$staff->last_update}}</td>
  </tr>
  @endforeach
</table>
{!! $staffs->links() !!}
</body>
</html>