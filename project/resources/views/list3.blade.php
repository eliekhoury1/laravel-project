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
    
    <th>more info</th>
  </tr>
  @php

 $sum=0;
 @endphp
  @foreach($data as $item)
  @php
 $list= App\Http\Controllers\OrderController::getrestoname($item['id']);
 $sum=$sum+$item['total'];
 @endphp
  <form action="{{Route('Order.show',['Order'=>$item['id']])}}" method="get">
 @csrf
  <tr>
    <td>{{$list['name']}}</td>
    <td>{{$item['code']}}</td>
    <td>{{$item['total']}}</td>
   
    
    <td>
        
         
          <button class="btn btn-danger" type=submit>Add to cart</button>

  </td>
  </form>
  </tr>
  @endforeach
</table>
<h2>TOTAL: ${{$sum}}<h2>
<form action="{{url('updateOrder')}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="cart-checkout">
                                <label for="appt">Select a time:</label>
                                <input type="time" id="appt" name="timer">
                                <button type="submit" class="food-btn"><span>Order</span></button>
                            </div>
                        </form>
                        <a href="{{url('Orderdel')}}">
    <button>Click me</button>
</a>
</body>
</html> 