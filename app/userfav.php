<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userfav extends Model
{
    //

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // public function genres()
    // {
    //     return $this->hasMany(genre::class);
    // }
    public $timestamps = false;
}
