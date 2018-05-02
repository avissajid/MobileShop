


@extends('master')



@section('content')


      <div id="slider_wrapper">
      <div id="slider">
         <div id="flexslider">
            <ul class="slides clearfix">
               <li>
                  <img src="{{asset('flextop/images/slide01.jpg')}}" alt="">
                  <div class="flex-caption">
                     <!-- <div class="flex-caption_inner container">
                        <div class="txt1">Sale up to 20% off!</div>
                        <div class="txt2">Alienware Desktop</div>
                        <div class="txt3">Save up to $599 off of select Alienware PCs for a limited time only.</div>
                        <div class="txt4"><a href="#" class="btn-default btn0">Get it Now</a></div>
                        </div> -->
                  </div>
               </li>
               <li>
                  <img src="{{asset('flextop/images/slide02.jpg')}}" alt="">
                  <div class="flex-caption">
                     <!-- <div class="flex-caption_inner container">
                        <div class="txt1">Sale up to 30% off!</div>
                        <div class="txt2">Futuro de la <br>Realidad virtual</div>
                        <div class="txt3">Save up to $599 off of select La Realidad Virtual  for a limited time only.</div>
                        <div class="txt4"><a href="#" class="btn-default btn0">Get it Now</a></div>
                        </div> -->
                  </div>
               </li>
               <li>
                  <img src="{{asset('flextop/images/slide03.jpg')}}" alt="">
                  <div class="flex-caption">
                     <!-- <div class="flex-caption_inner container">
                        <div class="hot-sale-wrapper"><span>Hot Sale</span></div>
                        <div class="txt2">4K 360 video<br>Colorful designs</div>
                        <div class="txt3">Now for manners use has company believe parlors. Least nor party<br>who wrote while did.</div>
                        <div class="txt4"><a href="#" class="btn-default btn0">Get it Now</a></div>
                        </div> -->
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </div>


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
        <!--   
https://www.youtube.com/watch?v=aUPfhGBz7sU
         -->    
          <div class="sidebar-content">
            <ul class="ul1">
               <?php
              $categry=\App\Category::all();
                ?>


                    <select >

    @foreach($categry as $cats)
    
                      <option value="{$cats->id}">{{$cats->cat_name}}</option>
                      @endforeach
                    </select>
          <!--   <li><a href="{{url('/main')}}/<?php echo "$cats->id" ?>"><?php echo "{$cats->cat_name}"?></a></li>
           -->  
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
                   <select>
                     <option value="2000-5000">2000-5000</option>
                     <option value="5000-8000">5000-8000</option>
                     <option value="8000-11000">8000-11000</option>
                     <option value="12000-20000">12000-20000</option>
                   </select>
              <div><a href="#" class="btn-default btn1">Filter</a></div>

             






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

  

              <div class="col-sm-2" >
                <div class="product">
                  <div class="product-inner">
                    <figure class="product-media">
                    <a href="{{route('next',['id'=>$book->id])}}"><img src= "{{asset('images') . '/'.$book->image}}"></a>  
                      <div class="product-links">
                      </div>
                    </figure>
                    <div class="product-divider"></div>
                    <div class="product-caption">
                     
                        <a href="{{route('next',['id'=>$book->id])}}"> <div class="product-name" ><label value="{{$book->brand_id}}"> 


                        <?php 

                              $productName=DB::table('brands')->where('id', '=', $book->brand_id)->get();
                              echo $productName[0]->brand_name; 

                        ?></a>


                          </label></div>
                      <div class="product-review clearfix">
                      </div>
                      <div >
                        <div class="product-price"> {{$book->price}}</div>
                        <div class="product-price-old">       </div>
                      </div>
                     

                    </div>
                  </div>
                </div>
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

