<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


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

Route::get("/admin/dashboard",[AdminController::class,"dashboard"]);
Route::get("/admin/addnewpost",[AdminController::class, "showAddPostPage"]);
Route::post("/admin/addnewpost",[AdminController::class, "storePost"]);
Route::get("/post/{post}",[PostController::class,"index"]);    
Route::post("/post/add-comment/{id}",[PostController::class, "addComment"]);
Route::post("/admin/upload",[AdminController::class, "upload"]);
// Route::get('/', function () {
//     return view('home');
// });

// Route::get("/get-rid-of-windows-lockscreen",function(){
//     return view("post1");
// });