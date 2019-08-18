<?php
namespace App\Repositories;

use App\Http\Requests\Filter;
use App\Repositories\Contracts\ITrackRepository;
use App\Models\Track;

/**
 * Created by PhpStorm.
 * User: eduard
 * Date: 8/17/19
 * Time: 10:42 PM
 */

class TrackRepository implements ITrackRepository {


    protected $model;


    public function __construct(Track $model)
    {
        $this->model = $model;
    }

    public function all()
    {
    }

    public function get()
    {

    }

    public function filter(Filter $filters)
    {
        return $this->model->filter($filters);
    }

    public function paginateBy($tracks, $paginateBy)
    {
        if ($paginateBy) {
            return $tracks->with(['author', 'genre'])->paginate($paginateBy);
        }

        return $tracks->with(['author', 'genre'])->get();
    }
}