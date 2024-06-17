<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use DB;
use Auth;
use Illuminate\Http\Request;
// use App\Http\Controllers\DB;

class AdminController extends Controller
{

    public function login(Request $request){
        // $data["name"] = "Emrys";
        // $data["email"] = "bhattbhaumik199@gmail.com";
        // $data["password"] = "123";
        // User::create($data);
        $data = $request->validate([
            "email" => "required | email",
            "password" => "required"
        ]);
        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect("/admin/dashboard");
        }
        else{
            return redirect()->back()->with("error","Username or Password is wrong");
        }
    }

    public function dashboard(){
        if(auth()->check()){
            $user = auth()->user();
            return view("admin.dashboard",["user"=>$user]);
        }
        else{
            return redirect("/admin/login");
        }
        // return $user;
    }

    public function upload(Request $request){
        $imageCounter = 1;
        if($request->session()->has("imageCounter")){
            $imageCounter = $request->session()->get("imageCounter");
            $imageCounter++;
            $request->session()->put("imageCounter",$imageCounter);
        }
        else{
            $request->session()->put("imageCounter",1);
        }
        $image = $request->file('file');
        $postId =  DB::table('posts')->latest('id')->first();
        if($postId != null){
            $postId = $postId->id;
        }
        else{
            $postId = 0;
        }
        $postId+=1;
        // dd($postId);
        $name = "a" . $postId . "i" .$imageCounter ;
        $imageName = $name . '.' . $image->getClientOriginalExtension();
        $request->file("file")->move(public_path("uploads"),$imageName);
        return response()->json(['location' => '/uploads/' . $imageName]);
    }

    public function storePost(Request $request){
        $data = $request->validate([
            "title"=> "required",
            "banner_image" => "required",
            "content" => "required"
        ]);
        $postId =  DB::table('posts')->latest('id')->first();
        if($postId != null){
            $postId = $postId->id;
        }
        else{
            $postId = 0;
        }
        $postId+=1;
        $imageName = "banner_image". $postId . ".jpg";
        $data['banner_image'] = $imageName;
        $data['author_id']=1;
        Post::create($data);
        $request->file("banner_image")->move(public_path("uploads"),$imageName);
        return $data;
    }

    public function showAddPostPage(){
        return view("admin.addpost");
    }

    public function showPosts(){
        $allPosts = Post::all();
        return view("admin.showposts",["posts"=>$allPosts]);
    }

    public function showEditPost(Post $post){
        return view("admin.editpost",["post"=>$post]);
    }

    public function editPost(Request $request){
        
        $post= Post::where("id","1")->first();
        // return $post;
        $data = $request->validate([
            "title"=> "required",
            "content" => "required"
        ]);
        $post->title = $data["title"];
        // $post->banner_image = $data["banner_image"];
        $post->content = $data["content"];
        $post->save();
        // return $post;
        return redirect("/admin/showposts")->with("success","Post updated successfully");
    }

    public function showLoginForm(){
        return view("admin.login");
    }

    public function logout(){
        auth()->logout();
        return redirect("/admin/login")->with("success","You have been logged out successfully");
    }    
}
