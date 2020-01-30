<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacultyUser extends Model
{
    //
    protected $guarded = [];

    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}
