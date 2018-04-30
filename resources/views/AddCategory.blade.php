@extends('layouts.home')

@section('content')


<html>



  <body>

      
<center>
      
<form action="{{url('/AddCategory')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
  <div class="form-group">
    <label><h2>  Add Category </h2></label>
    <input type="text" class="form-control" name="cat_name" placeholder="Enter Category name" style=" width:250px ">
  </div>
     
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</center>
   

   </body>
</html> 


@endsection