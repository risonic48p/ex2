<?php

namespace App\Repositories;


use App\Repositories\Interfaces\IntervalRepositoryInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class IntervalRepository implements IntervalRepositoryInterface
{

    /**
     * Get all Intervals
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        return DB::table('intervals')->orderBy('id')->lazy()->collect();
    }

    /**
     * Get Intersections Intervals
     * @param int $left
     * @param int $right
     * @return Collection
     */
    public function getIntersections(int $left, int $right): Collection
    {
        $res = [];
        DB::table('intervals')
            ->where('start', '<=', $right)
            ->where('end', '>=', $left)
            ->orderBy('id')
            ->lazy()->each(function (object $interval) use (&$res) {
                $res[] = (array)$interval;
            });

        return collect($res);
    }
}
