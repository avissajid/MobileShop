  
  @extends('layouts.home')

  @section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

   <table>
   	  <thead>
   	  	<tr>

       <th>Name</th>

       <th>price</th>

       <th>quantity</th>

       

   	  	</tr>

   	  </thead>
<tbody>

   	  @foreach($cartItems as $cart)
   	  <tr>
   	  	<td>{{$cart->model_name}}</td>
<td>{{$cart->price}}</td>
<td>{{$cart->quantity}}</td>
</tr>
@endforeach
</tbody>
   </table>





</body>
</html>

  @endsection