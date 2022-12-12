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
    <th>price</th>
    <th>quantity</th>
    
  </tr>
  @foreach($data as $item)
  
 @csrf
 @php
 $list= App\Http\Controllers\FoodsController::getfood($item['foods_id']);
 @endphp
  <tr>
    <td>{{$list['name']}}</td>
    <td>{{$list['price']}}</td>
    <td>{{$item['quantity']}}<td>
    
 
  </tr>
  @endforeach
</table>

</body>
</html>