<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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
        $postId =  DB::table('posts')->latest('id')->first()->id;
        $postId+=1;
        $name = "a" . $postId . "i" .$imageCounter ;
        $imageName = $name . '.' . $image->getClientOriginalExtension();
        $request->file("file")->move(public_path("uploads"),$imageName);
        return response()->json(['location' => '/uploads/' . $imageName]);
    }

    public function storePost(Request $request){
        $data = $request->validate([
            "image" => "required",
            "content" => "required"
        ]);
        // $request->file("image")
        return $data;
        $n = strpos($data["content"],"--")+4;
        $next = strpos($data["content"],"--",$n)-2;
        return substr($data["content"],$n ,($next - $n));
    }

    public function showAddPostPage(){
        return view("admin.addpost");
    }
}
