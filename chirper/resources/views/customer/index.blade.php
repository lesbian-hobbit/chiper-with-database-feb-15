@foreach ($customers as $customer)
<html>
<style>
table, th {
  border:1px solid black;
  
  
}
table, td {
  
  width: 10%
  
}
</style>
<body>
<table>
<table style="width:100%">

    <td>{{$customer->firstName}}<br></td>
    <td>{{$customer->lastName}}<br></td>
    <td>{{$customer->email}}<br></td>
    <td>{{$customer->contactNumber}}<br></td>
    <td>{{$customer->address}}<br></td>
</tr>
</table>
</body>
</html>
@endforeach