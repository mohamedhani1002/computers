<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackHome;
use App\Http\Controllers\Invokcontroller;
use Illuminate\Http\Request;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ComputersController;
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

/*Route::get("/{name}/{id}" , function($name,$id){
    echo "<h1> welcome $name your id is $id </h1>";
    return view ('welcome');
    
});
Route::controller(BackHome::class)->group(function(){
Route::get("/index",'index');

});*/



Route::get('/' ,[StaticController::class, 'index'])->name('welcome');
Route::get('/about' ,[StaticController::class, 'about'])->name('about');
Route::get('/contact' ,[StaticController::class, 'contact'])->name('contact');
Route::resource('computers',ComputersController::class);



  