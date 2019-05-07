<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venuepost extends Model
{
    public function imgpost()
    {
        return $this->hasOne(venueImage::class);
    }
}
