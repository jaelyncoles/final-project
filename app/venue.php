<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venue extends Model
{
    public function venue()
    {
        return $this->belongsTo(User::class);
    }
}
