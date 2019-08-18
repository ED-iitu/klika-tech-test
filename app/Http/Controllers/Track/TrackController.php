<?php
namespace App\Http\Controllers\Track;

use App\Http\Controllers\Controller;
use App\Http\Requests\Track\TrackFilters;
use App\Models\Track;
use App\Repositories\TrackRepository;
use Carbon\Carbon;


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

    public function getYear()
    {
        $years = Track::selectRaw('distinct YEAR(year) as year')
            ->orderBy('year' , 'ASC')
            ->get();
        return $years;
    }


}