<?php

namespace App\Http\Controllers;

use App\model_number;
use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

// class AjaxControler extends Controller
// {

// 	public function index()
// 	{
// 		$msg = 'this is simple message'
// 		return response()->json(array('msg'=>$msg), 200);
// 	}
// }

class HomeController extends Controller
{
    public function showProductsWithCategory($id)
    {
    	$prodct = Product::where('cat_id', $id)->get();
        	
       

    	return view('Home', compact('prodct'));
    }

   public function addData(Request $request)
      {

           $p = new Product();
              
      
 		
 		    $product->cat_id=$request->input('cat_id');
                     $product->brand_id=$request->input('brand_id');
                     $product->model_name=$request->input('model_name');
                     $product->price=$request->input('price');
                     $product->details=$request->input('details');
       
		$file=Input::file("image");

        if(!empty($file)){

            $newFilename=$file->getClientOriginalName();
             $destinationPath='files';
            $file->move($destinationPath,$newFilename);
             $p->image = $newFilename;
         }
 $product->realflash=$request->input('realflash');
                     $product->G2=$request->input('G2');
                     $product->G3=$request->input('G3');
                      $product->G4=$request->input('G4');
                     $product->GPS=$request->input('GPS');
                     $product->Loudpeaker=$request->input('Loudpeaker');

                     $product->HeadPHones=$request->input('HeadPHones');

                     $product->Infrared=$request->input('Infrared');

                     $product->Fingerprint_sensor=$request->input('Fingerprint_sensor');
                        $product->Proximity=$request->input('Proximity');
                     $product->Accelerometer=$request->input('Accelerometer');
                      $product->Gyroscope=$request->input('Gyroscope');

                     $product->Ambient_Light=$request->input('Ambient_Light');  

                     $product->display_type=$request->input('display_type');    

      
                     $product->Size=$request->input('Size');
                     $product->Resolution=$request->input('Resolution');
                     $product->Pixel_Density=$request->input('Pixel_Density');
                     $product->Touchscreen_type=$request->input('Touchscreen_type');
                     $product->Color_Reproduction=$request->input('Color_Reproduction');
                     $product->Screen_to_body_percentage=$request->input('Screen_to_body_percentage');

         $p->save();
         return view('Home');
    }

    public function addcategory(Request $request)
     {
            $Category=new Category();
             $Category->cat_name=$request->input('cat_name');
                
             $Category->save();

             return view('Home');



     }
          public function next ($id)
           {

            $data=\App\product::where('id','=',$id)->first();
             return view('details',compact('data'));
            }


     public function addbrand(Request $request)
       {
            $Brand=new Brand();
             $Brand->brand_name=$request->input('brand_name');
                $Brand->cat_id = $request->input('cat_id');
             $Brand->save();

             return view('Home');


         }
         public function addmodel(Request $request)
          {   
                 $model=new model_number();

                 $model->cat_id=$request->input('cat_id');
                   
                 $model->brand_id=$request->input('brand_id');

                 $model->model_name=$request->input('model_name');
                 
                 $model->save();

          }

          public function show()
          {

          
              $prodct=\App\Product::all();

                return view('Home',compact('prodct'));

          }
    

            	public function index()
				{

					$id = $_GET['id'];
					$brand= Brand::where('cat_id',$id)->get();
       	           
                  
                  // return view('AddModel', compact('category', 'brand'));
					 return $brand;


				
				}
				public function model()
				{

					
                         $id = $_GET['id'];
					$model= Brand::where('brand_id',$id)->get();
       	           
                  
                  // return view('AddModel', compact('category', 'brand'));
					 return $model;

				
				}
				public function addproduct(Request $request)
				{
                     $product=new Product();

                     
                     $product->cat_id=$request->input('cat_id');
                     $product->brand_id=$request->input('brand_id');
                     $product->model_name=$request->input('model_name');
                     $product->price=$request->input('price');
                     $product->details=$request->input('details');
                     	$file=Input::file("image");

        if(!empty($file)){

            $newFilename=$file->getClientOriginalName();
            $destinationPath= public_path() . '/images';
            $upload = $file->move($destinationPath,$newFilename);
            if($upload)
               $product->image = $newFilename;
         }


                     $product->realflash=$request->input('realflash');
                     $product->G2=$request->input('G2');
                     $product->G3=$request->input('G3');
                      $product->G4=$request->input('G4');
                     $product->GPS=$request->input('GPS');
                     $product->Loudpeaker=$request->input('Loudpeaker');

                     $product->HeadPHones=$request->input('HeadPHones');

                     $product->Infrared=$request->input('Infrared');

                     $product->Fingerprint_sensor=$request->input('Fingerprint_sensor');
                        $product->Proximity=$request->input('Proximity');
                     $product->Accelerometer=$request->input('Accelerometer');
                      $product->Gyroscope=$request->input('Gyroscope');

                     $product->Ambient_Light=$request->input('Ambient_Light');	

                     $product->display_type=$request->input('display_type');	

      
                     $product->Size=$request->input('Size');
                     $product->Resolution=$request->input('Resolution');
                     $product->Pixel_Density=$request->input('Pixel_Density');
                     $product->Touchscreen_type=$request->input('Touchscreen_type');
                     $product->Color_Reproduction=$request->input('Color_Reproduction');
                     $product->Screen_to_body_percentage=$request->input('Screen_to_body_percentage');

                     $product->save();
                     return view('AddProduct');  

	


				}



}
