<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\Filter;

class Track extends Model
{
    public function scopeFilter($query, Filter $filters)
    {
        return $filters->apply($query);
    }

    public function author()
    {
        return $this->hasOne('App\Models\Author', 'id', 'author_id');
    }

    public  function genre()
    {
        return $this->hasOne('App\Models\Genre', 'id', 'genre_id');
    }
}
