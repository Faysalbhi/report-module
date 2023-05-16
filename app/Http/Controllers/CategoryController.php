<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    
    function index(){
        return view('category.index',[
            'categories'=>DB::table('categories')->get(),
        ]);
    }
    
    
    function create(Request $request){
        $data=[
        'name'=>$request->name,
        'description'=>$request->description,
        ];

        DB::table('categories')->insert($data);
        return back();
    
    }
}
