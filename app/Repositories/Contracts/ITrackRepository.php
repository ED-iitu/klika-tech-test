<?php
namespace App\Repositories\Contracts;
/**
 * Created by PhpStorm.
 * User: eduard
 * Date: 8/17/19
 * Time: 10:41 PM
 */

interface ITrackRepository
{
    public function all();

    public function get();
}