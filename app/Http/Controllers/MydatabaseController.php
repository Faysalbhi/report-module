<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Config;

class MydatabaseController extends Controller
{   

    public function index(){
        // $databaseName=DB::connection()->getDatabaseName();
        // $databaseName = Config::get('database.connections.'.Config::get('database.default'));
        $databases=DB::select('SHOW DATABASES');
        $databaseName = array_map('current', $databases);
        
        
       
        return view('database.index',compact('databaseName'));
    }

    public function getTable($dbName){
        $table=DB::select("select * from information_schema.tables where table_schema='$dbName'");
        // $table=DB::select("SHOW TABLES from $dbName");
        return view('database.showtable',[
            'table'=>$table,
            'dbName'=>$dbName,
        ]);
    }

    public function tableDetails($table,$dbname){
        $tabledetails=DB::select("select * from $dbname.$table");
        // $all_column=DB::select("select column_name from information_schema.columns where table_name='$table'");
        // echo "<pr>";
        // $array_column=array_map('current',$all_column);
        // foreach($array_column as $value ){
        //     echo $value.'</br>';
        // };
        // echo "</pre>";
        // die();
        return view('database.tabledetails',[
            'tabledetails'=>$tabledetails,
            'table'=>$table,
            'dbname'=>$dbname,
        ]);
    }

    public function columnDetails($table,$dbname){

    $structure=DB::select("desc $dbname.$table");

    return view('database.columndetails',[
        'table'=>$table,
        'dbname'=>$dbname,
        'structure'=>$structure,
    ]);
    
    
    }









    public function submitform(Request $request){
            dd($request->all());
            dd($_POST);

    }

    public function copyData(){
        $table1=DB::table('teachers')->get();
        foreach($table1 as $key=>$row){

                $name2=$row->name;
                $email2=$row->email;
                $address2=$row->address;
                $phone2=$row->phone;
                $subject2=$row->subject;
                DB::table('mentors')->insert([
                    'name2'=>$name2,
                    'email2'=>$email2,
                    'address2'=>$address2,
                    'phone2'=>$phone2,
                    'subject2'=>$subject2,
                ]);
                
        }
        echo "Successfully done";
    }
}
