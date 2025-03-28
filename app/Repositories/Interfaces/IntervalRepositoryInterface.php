<?php
namespace App\Repositories\Interfaces;


use Illuminate\Support\Collection;

interface IntervalRepositoryInterface
{
    /**
     * @return Collection
     */
    public function getAll(): Collection;


    /**
     * @param int $left
     * @param int $right
     * @return Collection
     */
    public function getIntersections(int $left, int $right): Collection;
}
