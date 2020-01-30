<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $guarded = [];

    public function page(){
        return $this->belongsTo(Page::class);
    }
    public function menus(){
        return $this->hasMany(Menu::class);
    }
    public function childrenMenus(){
        return $this->hasMany(Menu::class)->with('menus');
    }
}
