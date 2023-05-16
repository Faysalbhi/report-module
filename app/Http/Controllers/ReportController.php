<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(){
        return view('reports.monitoring');
    }
    public function basemonitoring($base){

        return view('reports.basemonitoring');
    }
}

