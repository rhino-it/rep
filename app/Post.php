<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function post_category(){
        return $this->belongsTo(PostCategory::class);
    }
    public function file_links()
    {
        return $this->belongsToMany(FileLink::class)->withTimestamps();
    }
}
