<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venuepost extends Model
{
    public function post()
    {
        return $this->belongsTo(venue::class);
    }
}
