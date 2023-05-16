<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MydatabaseController;
use App\Http\Controllers\ReportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('reports.index');
});

Route::view('master','components.layouts.master');




Route::get('mis-reports',[UserController::class,'index'])->name('mis.report');
Route::post('getFilterdata',[UserController::class,'getFilterdata']);


// user 

Route::get('users',[UserController::class,'index'])->name('user');
Route::post('user-create',[UserController::class,'create'])->name('user.create');
Route::post('deleteUser',[UserController::class,'delete']);


// category 
Route::post('categories-create',[CategoryController::class,'create'])->name('categories.create');
Route::get('categories',[CategoryController::class,'index'])->name('categories');

// product 
Route::post('product-create',[ProductController::class,'create'])->name('product.create');
Route::get('products',[ProductController::class,'index'])->name('products');

// notes 
Route::get('notes',[NotesController::class,'index'])->name('notes');
Route::get('summernotes',[NotesController::class,'summernotes'])->name('summernotes');

// documents 

Route::get('documents',function(){
    return view('documents.webpreview');
});

Route::get('check',[MydatabaseController::class,'index']);
Route::get('database/{dName}',[MydatabaseController::class,'getTable'])->name('database');
Route::get('showtable',[MydatabaseController::class,'showTable']);
Route::get('tabledetails/{table}/{dbname}',[MydatabaseController::class,'tableDetails'])->name('tabledetails');
Route::get('columndetails/{table}/{dbname}',[MydatabaseController::class,'columnDetails'])->name('columndetails');





Route::get('copydata',[MydatabaseController::class,'copyData'])->name('copydata');
Route::post('submitform',[MydatabaseController::class,'submitform'])->name('submitform');
Route::get('alfacaform',function(){

    return view('alpacaform.form');
});

Route::get('monitoring/report',[ReportController::class,'index'])->name('monitoring.report');
Route::get('basemonitoring/{base}',[ReportController::class,'basemonitoring'])->name('basemonitoring');
