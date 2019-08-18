<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function track()
    {
        return $this->belongsTo('App\Models\Track');
    }
}
