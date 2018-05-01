@extends('master')

@section('content')


<html>



<body>

	
	<center>
		
		<form action="{{url('/AddBrand')}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			
			<?php  
			$p=\App\Category::all();
			?> 
          
          


			<div class="form-group">
				<label for="">Select Category</label>
				<select class="form-control"  style=" width:250px"  name="cat_id" >
					@foreach($p as $prdct)
					<option  value="{{$prdct->id}}">{{$prdct->cat_name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label><h2>  Add Model </h2></label>
				<input type="text" class="form-control" name="brand_name" placeholder="Enter Model_name name" style=" width:250px ">
			</div>
			
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</center>
	

</body>
</html> 


@endsection