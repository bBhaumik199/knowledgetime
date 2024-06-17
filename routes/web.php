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
Route::get("/posttemp/1",[PostController::class,"index2"]);
Route::get("/post/{post}",[PostController::class,"index"]);    
Route::post("/post/add-comment/{id}",[PostController::class, "addComment"]);


Route::group(["middleware"=>["auth"]],function(){
    Route::get("/admin/dashboard",[AdminController::class,"dashboard"]);
    Route::get("/admin/addnewpost",[AdminController::class, "showAddPostPage"]);
    Route::post("/admin/addnewpost",[AdminController::class, "storePost"]);    
    Route::get("/admin/showposts",[AdminController::class, "showPosts"]);
    Route::get("/admin/showeditpost/{post}",[AdminController::class, "showEditPost"]);
    Route::get("/admin/deletepost/{post}",[AdminController::class, "deletePost"]);
    Route::post("/admin/editpost",[AdminController::class, "editPost"]);
    Route::post("/admin/upload",[AdminController::class, "upload"]);
    Route::post("/admin/logout",[AdminController::class, "logout"]);
} );

Route::get("/admin/login",[AdminController::class, "showLoginForm"])->name("login");
Route::post("/admin/login",[AdminController::class, "login"]);

