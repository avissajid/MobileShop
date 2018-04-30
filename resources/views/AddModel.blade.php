

   
  @extends('layouts.home')

  @section('content')


  <html>



  <body>


    <center>

      <form action="{{url('/addmodel')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
       
        <?php  
        $p=\App\Category::all();
        ?> 
 
      <?php  
      $brand=\App\Brand::all();  
      ?>   
         
              
          <label><h2>  Add Product </h2></label>
        <div class="form-group">
        	<label for="">Select Category</label>
          <select class="form-control ProductCategory"  style=" width:250px"  name="cat_id"  id="ProductCategory" >
           @foreach($p as $prdct)
           <option  value="{{$prdct->id}}">{{$prdct->cat_name}} </option>
           @endforeach
         </select>
       </div>

        <div class="form-group">
          <label for="">Select SubCategory</label>
          <select class="form-control  brand"  style=" width:250px"  name="brand_id" id="brand_id" >
           @foreach($brand as $abc)
           <option value="{{$abc->brand_id}}" > </option>
           @endforeach
         </select>
       </div>
  
        <div class="form-group">
          <input type="text" class="form-control" name="model_name" placeholder="Enter Model_name name" style=" width:250px ">
        </div>
       
       <button type="submit" class="btn btn-primary">Submit</button>
     </form>
   </center>

 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <!-- <script  src="../../Jquery

  /prettify.js"></script> -->
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


/*
            var Pcat_id=$(this).val();
            var div=$(this).parent();

            var op=" ";

            $.ajax({

                    type:'get',
                    url:'{!!URL::to('AddModel')!!} ',
                    data:{'id':Pcat_id},
                    success:function(data){


                    op+='<option value="0" selected disabled>chose brand </option>';
                    for(var i=0;i<data.lenght;i++)
                    {
                      op+='<option value="'+data[i].id+'">'+data[i].brand_name+'</option>';
                    }
                   
                    div.find('.brand_name').html(" ");
                    div.find('.brand_name').append(op);

                   
                    },

            });
*/
       



 </script>

      


 </body>
 </html> 


 @endsection