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
    <th>Storename</th>
   
    <th>code</th>
    <th>total</th>
    <th>timestamp</th>
    <th>more info</th>
  </tr>
  @foreach($data as $item)
  @php
 $list= App\Http\Controllers\OrderController::getrestoname($item['id']);
 $cur=\Carbon\Carbon::now();
 
 $list1= App\Http\Controllers\OrderController::gettimeremaining($item['id']);
 
 @endphp
  <form action="{{Route('Order.show',['Order'=>$item['id']])}}" method="get">
 @csrf
  <tr>
    <td>{{$list['name']}}</td>
    <td>{{$item['code']}}</td>
    <td>{{$item['total']}}</td>
    <td>{{$list1}}</td>
    
    <td>
        
         
          <button class="btn btn-danger" type=submit>Add to cart</button>

  </td>
  </form>
  </tr>
  @endforeach
</table>

</body>
</html>