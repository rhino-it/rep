<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileLink extends Model
{
    //
    protected $guarded = [];

    public function pages()
    {
        return $this->belongsToMany(Page::class)->withTimestamps();
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class)->withTimestamps();
    }
}
