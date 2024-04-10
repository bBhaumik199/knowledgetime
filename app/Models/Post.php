<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $fillable=[
        "title",
        "banner_image",
        "content",
        "downloadable_file_name",
        "author_id"
    ];
    public function author(){
        return $this->belongsTo(User::class,'author_id');
    }
    use HasFactory;
}
