<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venuefav extends Model
{
    public function venuefav (){
        return $this->belongsTo(User::class);
    }
}
