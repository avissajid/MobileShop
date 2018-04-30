<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use Cart;
class CartController extends Controller
{
    
  public function index()
  {

     $cart= Cart::content();
     return view('Shopping_Cart',['data'=>$cart]);

  }
  public function additem($id)
  {   
      $p=Product::find($id);
      $c=Cart::add(['id' => $p->id, 'name' => $p->model_name, 'qty' => 1, 'price' => $p->price]);
   
     
  }

  public function removeitem($id)
  {
        Cart::remove($id);
      return back()->withInfo('successfullyy updated');

  }

  public function update(Request $request,$id)
  {
       Cart::update($id,['qty'=> $request->qty]);
       return back()->withInfo('successfullyy updated');

  }


}
