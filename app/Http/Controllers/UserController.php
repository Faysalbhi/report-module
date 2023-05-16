<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    


    function index(){
        return view('user.index',[
            "users"=>DB::table('users')->join('roles','users.user_role','=','roles.id')
                    ->select('users.*',"roles.user_role")
                    ->get()
        
        ]);
    }



    function create(Request $request){

        $data=[
        'fname'=>$request->fname,
        'lname'=>$request->lname,
        'country'=>$request->country,
        'city'=>$request->city,
        'address'=>$request->address,
        'zipcode'=>$request->zipcode,
        'email'=>$request->email,
        'password'=>$request->password,
        'phone'=>$request->phone,
        ];

        DB::table('users')->insert($data);
        return back();
    }

    function delete(Request $request){
            DB::table('users')->where('id',$request->user_id)->delete();
    }
    
    function getFilterdata(Request $request){
        $data="BSR";
        $data2="complite";
        $demos=DB::table('demos')->where(['base_unit'=>$data])->get();
        return response()->json($demos);
    }
}
