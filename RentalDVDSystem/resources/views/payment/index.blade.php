<!DOCTYPE html>
<head>
  <title>Payment一覧画面</title>
</head>
<body>
<h1>Payment一覧</h1>
<table>
  <tr>
    <th>Payment ID</th>
    <th>Customer ID</th>
    <th>Staff ID</th>
    <th>Rental ID</th>
    <th>Amount</th>
    <th>Payment Date</th>
    <th>Last Update</th>
  </tr>
  @foreach ($payments as $payment)
  <tr>
    <td>{{$payment->payment_id}}</td>
    <td>{{$payment->customer_id}}</td>
    <td>{{$payment->staff_id}}</td>
    <td>{{$payment->rental_id}}</td>
    <td>{{$payment->amount}}</td>
    <td>{{$payment->payment_date}}</td>
    <td>{{$payment->last_update}}</td>
  </tr>
  @endforeach
</table>
{!! $payments->links() !!}
</body>
</html>