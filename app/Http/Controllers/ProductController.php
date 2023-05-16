<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{   
    function index(){

            $products=DB::table('products')
                        ->select(count('category_id'),'products.*')
                        ->join('category_product','category_product.product_id','products.id')
                        ->join('categories','categories.id','category_product.category_id')
                        ->groupBy('category_id')
                        ->get();
            dd($products);
          return view('product.index',[
              'products'=>$products,
              'categories'=>DB::table('categories')->get(),
          ]);
      }


     function create(Request $request){
        $data=[
        'name'=>$request->name,
        'description'=>$request->description,
        'category_id'=>$request->category_id,
        ];

        DB::table('products')->insert($data);
        return back();
    
    }
}
