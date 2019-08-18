<?php
namespace App\Http\Controllers\Track;

use App\Http\Controllers\Controller;
use App\Http\Requests\Track\TrackFilters;
use App\Repositories\TrackRepository;


class TrackController extends Controller
{
    private $trackRepository;

    public function __construct(TrackRepository $trackRepository)
    {
        $this->trackRepository = $trackRepository;
    }

    public function list(TrackFilters $filters)
    {
        $tracks = $this->trackRepository->filter($filters);
        $paginateBy = $filters->paginateBy;

        return response()->json($this->trackRepository->paginateBy($tracks, $paginateBy));
    }


}