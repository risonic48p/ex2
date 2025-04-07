<?php
namespace App\Services\Contracts;


use App\Models\Article;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Requests\ArticleFormRequest;

interface ArticleServiceInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;


    /**
     * @return LengthAwarePaginator
     */
    public function paginated(int $perPage): LengthAwarePaginator;

    /**
     * @param ArticleFormRequest $request
     * @return Article
     */
    public function make(ArticleFormRequest $request): Article;
}
