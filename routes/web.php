<?php

 namespace App\Http\Controllers;


use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post("iletisim/post", [form::class,"post"] 
    
)->name('post');
Route::get("/", [testpdf::class,"index"]);



Route::get('pdf' ,[testpdf::class,"pdf"]
);
Route::get('pdf1' ,[testpdf::class,"pdf1"]
);
Route::get('pdf2' ,[testpdf::class,"pdf2"]
);
Route::get('pdf3' ,[testpdf::class,"pdf3"]
);
Route::get('pdf4' ,[testpdf::class,"pdf4"]
);