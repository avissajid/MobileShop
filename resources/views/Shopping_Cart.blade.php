@extends('master')
@section('content')

<div id="content">

<div class="container">

  <div class="table-responsive table-responsive1">
    <table class="table table1">
      <thead>
        <tr>
          <th class="col1">Product Name</th>
          <th class="col2">Price</th>
          <th class="col3">Quantity</th>
          <th class="col4">Total Price</th>
        </tr>
      </thead>
      <tbody>
      	@foreach($data as $pro)
        <tr>
          <td>
            <div class="product-shopping-cart clearfix">
              <figure><img src="images/product01.png" alt="" class="img-responsive"></figure>
              <div class="caption">
                <a href="product-details.html">{{$pro->model_name}}</a>
              </div>
            </div>
          </td>
          <td>
            <div class="product-shopping-cart-price">{{$pro->price}}</div>
          </td>
          <td>
            <div class="product-shopping-cart-quantity">
              <div class="quantity">
                <button value="{{$pro->qty}}" class="dec quantity-button">-</button>
                <input class="quantity-input" type="text" value="{{$pro->qty}}">
                <button class="inc quantity-button" value="{{$pro->qty}}">+</button>
              </div>
            </div>
          </td>
          <td>
            <div class="product-shopping-cart-total-price">
              {{$pro->price * $pro->qty}}
             <a href="{{url('/cart/remove')}}/{{$pro->rowId}}"> <button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span></button></a>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <div class="pane3 clearfix">
    <div class="apply-coupon">
      <form class="clearfix">
        <input type="text" class="form-control" placeholder="" value="98F101192">
        <a href="#" class="">Apply Coupon</a>
      </form>
    </div>
    <div class="update-shopping-cart">
      <a href="#">Update Shopping Cart</a>
    </div>
  </div>
  <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="price">Resolution</label>
               <div class="col-xs-7">
                  <input type="text" class="form-control" id="price" name="Resolution" placeholder="Enter Product Resolution">
               </div>
            </div>
            <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3"  for="price">Size</label>
               <div class="col-xs-7">
                  <input type="text" class="form-control" id="price" name="Size" placeholder="Enter Product Price">
               </div>
            </div>
            <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="price">Pixel Density</label>
               <div class="col-xs-7">
                  <input type="text" class="form-control" id="price" name="Pixel_Density" placeholder="Enter Product Pixel Density">
               </div>
            </div>
 

            <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="price">Touchscreen_ype:</label>
               <div class="col-xs-7">
                  <input type="text" class="form-control" id="price" name="Touchscreen_type" placeholder="Enter Product Touchscreen type">
               </div>
            </div>
            <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="price">Color Reproduction  </label>
               <div class="col-xs-7">
                  <input type="text" class="form-control" id="price" name="Color_Reproduction  " placeholder="Enter Product Price">
               </div>
            </div>
            <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="price">Screen to body percentage</label>
               <div class="col-xs-7">
                  <input type="text" class="form-control" id="price" name="Screen_to_body_percentage" placeholder="Enter Product Price">
               </div>
            </div>
            <div class="form-group" style="padding-right: 100px;">
               <label class="control-label col-xs-3" for="price">Color_Reproduction</label>
               <div class="col-xs-7">
                  <input type="text" class="form-control" id="price" name="Color_Reproduction" placeholder="Enter Product Color_Reproduction">
               </div>
            </div>
           
  <div class="row">
    <div class="col-sm-5 col-sm-offset-7">
      <div class="cart-totals-wrapper">
        <div class="title">Cart Totals</div>
        <div class="cart-subtotal clearfix">
          <div class="cart-subtotal-txt">Cart Subtotal:</div>
          <div class="cart-subtotal-num">{{Cart::subtotal()}}</div>
        </div>
        <div class="shipping-and-handling clearfix">
          <div class="shipping-and-handling-txt">Shipping and Handling:</div>
          <div class="shipping-and-handling-num">{{$pro->tax()}}</div>
        </div>
        <div class="cart-totals clearfix">
          <div class="cart-totals-txt">{{Cart::total()}}</div>
          <div class="cart-totals-num"></div>
        </div>
        <div class="calculate-shipping">Calculate Shipping</div>

        <form id="add-to-cart-form" class="form-horizontal" action="javascript:void(0);">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                  <label>Size <span>*</span></label>
                  <select class="form-control">
                    <option selected>United States (USA)</option>
                    <option>Location 1</option>
                    <option>Location 2</option>
                    <option>Location 3</option>
                    <option>Location 4</option>
                  </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                  <label>Color <span>*</span></label>
                  <input type="text" class="form-control" placeholder="Post Code / Zip">
              </div>
            </div>
          </div>
          <button type="submit" class="btn-default btn-update-totals">Update Totals</button>
          <a class="btn-default btn-proceed-to-checkout" href="checkout.html">Proceed to Checkout</a>
          <button class="btn-default btn-back-to-shopping">Back to Shopping</button>
        </form>

        

      </div>
    </div>
  </div>

</div>

</div>

@endsection