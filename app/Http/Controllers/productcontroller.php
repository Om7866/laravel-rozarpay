<?php

namespace App\Http\Controllers;
use App\Models\Product; 
use Illuminate\Http\Request;

class productcontroller extends Controller
{
     public function index(Request $request){

        $products = Product::all();

        return view('products.product',compact('products'));
    }

     public function show($id){
        $product = Product::find($id);
        return view('products.productshow',compact('product'));
    }
  
     function callback(Request $request){
        
        dd($request->all());


    }


}
