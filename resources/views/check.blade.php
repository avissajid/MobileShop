

   
  @extends('layouts.home')

  @section('content')
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
              <?php  
             $brand=\App\Brand::all();  
               ?>
               <?php  
             $model=\App\model_number::all();  
               ?>



   <div class="container">
      <div class="col-md-9">
         <h2 class="page-header" style="color:cadetblue">Add Product :</h2>
         <form class="form-horizontal" action="{{url('/check')}}" method="POST">
            @csrf
          <?php $cat=\App\Category::all() ?>
               
            <div class="form-group">
               <label class="control-label col-xs-3   " for="category">Category:</label>
               <div class="col-xs-9">
                  <select class="form-control ProductCategory" id="ProductCategory" name="cat_id">
                     <option selected disabled>Select the Category</option>
                     
                     @foreach($cat as $c)
                     <option value="{{$c->id}}">{{$c->cat_name}}</option>
                   @endforeach
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-xs-3  " for="brand">Brands:</label>
               <div class="col-xs-9">
                  <select class="form-control brand" id="brand" name="brand_id">
                     <option selected disabled>Select the Brand</option>
                     @foreach($brand as $b)
                     <option value="{{$b->brand_id}}"></option>
                   @endforeach
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-xs-3  " for="brand">Brands:</label>
               <div class="col-xs-9">
                  <select class="form-control model" id="model" name="model_id">
                     <option selected disabled>Select the Brand</option>
                     @foreach($model as $m)
                     <option value="{{$m->model_id}}"></option>
                   @endforeach
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-xs-3" for="name">Product Model:</label>
               <div class="col-xs-9">
                  <input type="text" class="form-control" id="name" name="model_name" placeholder="Enter Product Name">
                
               </div>
            </div>
              <div class="form-group">
               <label class="control-label col-xs-3" for="name">Product Name:</label>
               <div class="col-xs-9">
                  <input type="text" class="form-control" id="name" name="product_name" placeholder="Enter Product Name">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-xs-3" for="price">Product Price:</label>
               <div class="col-xs-9">
                  <input type="text" class="form-control" id="price" name="price" placeholder="Enter Product Price">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-xs-3" for="msg">Product Details:</label>
               <div class="col-xs-9">
                  <textarea class="form-control" rows="5" id="msg" name="details"></textarea>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-xs-3" for="image">Product Image:</label>
               <div class="col-xs-9">
                  <label for="FormControlFile"></label>
                  <input type="file" class="form-control-file" id="FormControlFile" name="productImage">
               </div>
            </div>
            <br><br>
            <div class="form-group">
               <label class="control-label col-xs-3" for="submit"></label>
               <div class="col-xs-9">
                  <button type="submit" class="btn btn-primary center-block" value="submit">Submit</button>
               </div>
            </div>
         </form>
      </div>
   </div>
  

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <!-- <script  src="../../Jquery/prettify.js"></script> -->
 <!-- <script type="text/javascript"> -->
   <script>
      $(document).ready(function(){
          
          
          
         $( ".ProductCategory" ).change(function() {
       var d = document.getElementById("ProductCategory").value;
       

      $.ajax({

                    type:'get',

                    url: '/myshop/public/getSubCategory/',
                    data:{'id':d},

                    success:function(data){
                         
                         $('.brand').find('option').remove();

                        var i = 0;
                         while(i < data.length)
                         {


                             $('.brand').append($('<option>',
                             {
                                value: data[i].id,
                                text : data[i].brand_name,
                              }));
                             i++;
                       }

                      },
                        error: function (data) {

                          console.log(data);
                        }




});
       });  

       });  

          $(document).ready(function(){
          
          
          
         $( ".brand" ).change(function() {
       var b = document.getElementById("brand").value;
       

      $.ajax({

                    type:'get',

                    url: '/myshop/public/getmodel/',
                    data:{'id':b},

                    success:function(data){
                         
                         $('.model').find('option').remove();

                        var i = 0;
                         while(i < data.length)
                         {


                             $('.model').append($('<option>',
                             {
                                value: data[i].id,
                                text : data[i].model_name,
                              }));
                             i++;
                       }

                      },
                        error: function (data) {

                          console.log(data);
                        }




});
       });  

       });    
  

</script>
      


 </body>
 </html> 


 @endsection