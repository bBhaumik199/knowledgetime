<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Comments;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index2(Post $post)
    {
        
        $allDetails = Post::with('author')->first();
        $time = $allDetails->creation_date;
        // return $time;
        $ts = strtotime($time);
        $t = "";
        $t .= date('d',$ts);
        $t .= " ";
        $t .= date('M',$ts);
        $t .= ", ";
        $t .= date('Y',$ts);
        return view("user.post1",["post"=>$allDetails,"date"=>$t]);
    }
    public function index(Post $post)
    {
        // $allDetails = Post::with('author')->first();
        // return $post;
        $time = $post->created_at;
        // return $time;
        $ts = strtotime($time);
        $t = "";
        $t .= date('d',$ts);
        $t .= " ";
        $t .= date('M',$ts);
        $t .= ", ";
        $t .= date('Y',$ts);
        return view("user.post2",["post"=>$post,"date"=>$t]);
    }

    public function addComment(Request $request){
        // Fetching form details
        $data = $request->validate([
            "name"=>"required",
            "email"=>"required | email",
            "comments"=>"required"
        ]);
        // setting up the post ID
        $post_id =  $request->segment(3);
        $data['post_id'] = $post_id;
        
        // Saving the data in db
        Comments::create($data);
        // redirect back to the post
        return redirect()->back()->with("success","Your comment has been added successfully");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
