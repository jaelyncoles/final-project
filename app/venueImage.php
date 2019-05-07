<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venueImage extends Model
{
    public function venuepost (){
        return $this->belongsTo(User::class);
        
    }

    public function venueImage(){
        return $this->belongsTo(User::class);
        
    }
}
