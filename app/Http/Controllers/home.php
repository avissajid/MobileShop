<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;

use \App\category;
use \App\Product;

class home extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show_product()
    {
        
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update ($id)
    {
        $books=DB::table('categories')->where('id',$id)->get();
        return view('layouts.home',compact('books'));
    }
    public function show()
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 //    public function edit(Request $request)
 //    {
 //        $prodct=new \App\Product;
 // $file=Input::file("image");
 //        if(!empty($file)){
 //            $newFilename=$file->getClientOriginalName();
 //            $destinationPath='files';
 //            $file->move($destinationPath,$newFilename);
 //            $picPath='files/' . $newFilename;
 //            $prodct->image=$picPath;
 //        }
 //        $prodct->save();

 //    }

}