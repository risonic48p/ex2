<?php
namespace App\Repositories\Contracts;


use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface ArticleRepositoryInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;


    /**
     * @return LengthAwarePaginator
     */
    public function paginated(int $perPage): LengthAwarePaginator;
}
