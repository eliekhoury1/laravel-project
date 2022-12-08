<!DOCTYPE html>
<html>
<head>
<meta name="csrf-token" content="{{csrf_token()}}">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>



<br><br><br><br><br>
<h2>PENDING REQUESTS</h2>

<table>
  <tr>
    <th>FULLNAME</th>
    <th>EMAIL</th>
    <th>NUMBER</th>
    <th>ADMIN REPLY</th>
    <th>ACCEPT</th>
    <th>REJECT</th>
  </tr>
  @foreach($listdata as $item)
  <tr>
    <td>{{$item->name}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->number}}</td>
    <td>{{$item->Admin_reply}}</td>
    <td>
      <form action="{{route('store.update',['store'=>$item])}}" method="POST">
        @csrf
        @method('PUT')
        <button class="btn btn-danger" type="submit">Accept</button>
</form>
    </td>
    <td>
      <form action="{{route('store.destroy',['store'=>$item])}}" method="post">
        @csrf
        @method('Delete')
        <button class="btn btn-danger" type="submit">Reject</button>
</form>
    </td>
</td>
  </tr>
  @endforeach
</table>

</body>
</html>

