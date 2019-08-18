<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function track()
    {
        return $this->belongsTo('App\Models\Author');
    }
}
