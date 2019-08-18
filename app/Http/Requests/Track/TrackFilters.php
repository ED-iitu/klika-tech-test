<?php
namespace App\Http\Requests\Track;

use App\Http\Requests\Filter;
use Illuminate\Http\Request;

/**
 *
 */
class TrackFilters extends Filter
{
    public $paginateBy;
    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->paginateBy = null;
    }

    public function author($authorId) {
        if (isset($authorId)) {
            return $this->builder->where('tracks.author_id', $authorId);
        }
    }

    public function year($year) {
        if (isset($year)) {
            return $this->builder->whereYear('tracks.year', $year);
        }
    }

    public function genre($genre) {
        if (isset($genre)) {
            return $this->builder->where('tracks.genre_id', $genre);
        }
    }

    public function sort($sort)
    {
        switch ($sort) {
            case "author":
                return $this->builder
                    ->join('authors', 'tracks.author_id', '=', 'authors.id')
                    ->orderBy('authors.name');
                break;
            case "song":
                return $this->builder
                    ->orderBy('tracks.song');
                break;
            case "genre":
                return $this->builder->join('genres', 'tracks.author_id', '=', 'genres.id')
                    ->orderBy('genres.name');
                break;
            case "year":
                return $this->builder
                    ->orderBy('tracks.year');

        }
    }

    public function paginateBy(int $paginateBy) {
        $this->paginateBy = $paginateBy;
    }

}