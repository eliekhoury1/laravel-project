<!DOCTYPE html>
<html>
<head>
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

<h2>HTML Table</h2>


<table>
  <tr>
    <th>Foodname</th>
   
    <th>Storename</th>
    <th>price</th>
    <th>edit</th>
  </tr>
  @foreach($list as $item)
  <form action="{{url('Cart',['id'=>$item['id']])}}" method="post">
 @csrf
  <tr>
    <td>{{$item['name']}}</td>
    <td>{{$item['store']}}</td>
    <td>{{$item['price']}}</td>
    <td>
          <button class="btn btn-danger" type=submit>Add to cart</button>
  </td>
  </form>
  </tr>
  @endforeach
</table>

</body>
</html>