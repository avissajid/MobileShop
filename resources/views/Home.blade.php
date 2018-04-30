


@extends('master')



@section('content')


     


  <div class="main-content-inner">



  <div id="content">

  <div class="container">
   
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-2 column-sidebar" >

        <div class="sidebar-block">
          <div class="sidebar-title">
            Categories
          </div>

            
          <div class="sidebar-content">
            <ul class="ul1">
               <?php
              $categry=\App\Category::all();
                ?>


    @foreach($categry as $cats)
              <li><a href="{{url('/main')}}/<?php echo "$cats->id" ?>"><?php echo "{$cats->cat_name}"?></a></li>
              @endforeach
            </ul>
          </div>
        </div>
    
  <div class="sidebar-block">
          <div class="sidebar-title">
            Filter By
          </div>
          <div class="sidebar-content">

            <div class="sidebar-filters">

              <div class="sidebar-filters-title">Price</div>

              <div class="slider-range-txt">Range:  <span>  100.00 -   1.700.00</span></div>
              <div id="slider-range"></div>
              <div class="slider-range-text clearfix">
                <input type="text" id="amount" readonly>
                <input type="text" id="amount2" readonly>
              </div>
              <div><a href="#" class="btn-default btn1">Filter</a></div>

              <br>

              <div class="sidebar-filters-title">Brands</div>

              <ul class="ul2">
                <li><a href="#">Sony <span>(09)</span></a></li>
                <li><a href="#">Panasonic <span>(02)</span></a></li>
                <li><a href="#">Apple <span>(10)</span></a></li>
                <li><a href="#">Samsung <span>(12)</span></a></li>
              </ul>

              <br>

              
             

              <div class="sidebar-filters-title">Size</div>

              <form>
                <div class="checkbox2-custom-item">
                  <input id="checkbox2-1" class="checkbox2-custom" name="checkbox2-1" type="checkbox">
                  <label for="checkbox2-1" class="checkbox2-custom-label">S</label>
                </div>
                <div class="checkbox2-custom-item">
                  <input id="checkbox2-2" class="checkbox2-custom" name="checkbox2-2" type="checkbox">
                  <label for="checkbox2-2" class="checkbox2-custom-label">M</label>
                </div>
                <div class="checkbox2-custom-item">
                  <input id="checkbox2-3" class="checkbox2-custom" name="checkbox2-3" type="checkbox" checked>
                  <label for="checkbox2-3" class="checkbox2-custom-label">L</label>
                </div>
                <div class="checkbox2-custom-item">
                  <input id="checkbox2-4" class="checkbox2-custom" name="checkbox2-4" type="checkbox">
                  <label for="checkbox2-4" class="checkbox2-custom-label">XL</label>
                </div>
                <div class="checkbox2-custom-item">
                  <input id="checkbox2-5" class="checkbox2-custom" name="checkbox2-5" type="checkbox">
                  <label for="checkbox2-5" class="checkbox2-custom-label">XXL</label>
                </div>


              </form>








            </div>

          </div>
        </div>


        




      </div>
      <div class="col-sm-8 column-content">

      

        <div class="pane1 clearfix">

          
         



        <div id="second-tab-group" class="tabgroup">
          <div id="tabs2-1">
             
           
            <div class="row">
              

             
 @foreach($prodct as $book)

  

              <div class="col-sm-2">
                <div class="product">
                  <div class="product-inner">
                    <figure class="product-media">
                     <a href="#" class="product-view"><img src= "{{asset('images') . '/'.$book->image}}"></a>  
                      <div class="product-links">
                        <a href="#"><i class="fa fa-heart-o"></i></a>
                        <a href="#"><i class="fa fa-bar-chart"></i></a>
                        <a href="#"><i class="fa fa-expand"></i></a>
                      </div>
                    </figure>
                    <div class="product-divider"></div>
                    <div class="product-caption">
                      <div class="product-name"><a href="product-details.html">{{$book->product_name}} </a></div>
                      <div class="product-review clearfix">
                        {{$book->model_name}}
                      </div>
                      <div class="product-prices clearfix">
                        <div class="product-price"> {{$book->price}}</div>
                        <div class="product-price-old">       </div>
                      </div>
                      <div class="product-add-to-cart " style="width: 80px ; " ><a href="{{url('/cart')}}/{{$book->id}}">Add to Cart</a></div>
                    </div>
                  </div>
                </div>
                <a href="{{route('next',['id'=>$book->id])}}"><h6>detail</h6></a>
              </div>

@endforeach
             
            

          </div>
          
        </div>

     </div>
   </div>
 </div>
</div>
</div>
</div>
</div>

@endsection