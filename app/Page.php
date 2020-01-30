<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //
    protected $guarded = [];


    public function menus(){
        return $this->hasMany(Menu::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function faculty(){
        return $this->belongsTo(User::class);
    }

    public function file_links()
    {
        return $this->belongsToMany(FileLink::class)->withTimestamps();
    }
}
