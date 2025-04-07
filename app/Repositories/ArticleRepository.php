<?php

namespace App\Repositories;


use App\Repositories\Contracts\ArticleRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use App\Models\Article;

class ArticleRepository implements ArticleRepositoryInterface
{

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return Article::all();
    }

    /**
     * @return LengthAwarePaginator
     */
    public function paginated(int $perPage = 5): LengthAwarePaginator
    {
        return Article::query()
            ->orderBy('id','desc')
            ->paginate($perPage);
    }
}
