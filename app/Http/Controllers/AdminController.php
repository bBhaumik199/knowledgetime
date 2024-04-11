<?php

namespace App\Http\Controllers;

use App\Models\Post;
use DB;
use Illuminate\Http\Request;
// use App\Http\Controllers\DB;

class AdminController extends Controller
{
    public function dashboard(){
        return view("admin.dashboard");
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
}
