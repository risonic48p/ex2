<?php

namespace App\Services;


use App\Repositories\ArticleRepository;
use App\Services\Contracts\ArticleServiceInterface;
use Illuminate\Support\Collection;
use App\Models\Article;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Requests\ArticleFormRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class ArticleService implements ArticleServiceInterface
{

    private ArticleRepository $repo;

    /**
     * @param ArticleRepository $articleRepository
     */
    public function __construct(ArticleRepository $articleRepository)
    {
        $this->repo = $articleRepository;
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->repo->all();
    }

    /**
     * @return LengthAwarePaginator
     */
    public function paginated(int $perPage = 5): LengthAwarePaginator
    {
        return $this->repo->paginated($perPage);
    }

    /**
     * @param ArticleFormRequest $request
     * @return Article
     * @throws \Exception
     */
    public function make(ArticleFormRequest $request): Article
    {
       $validated = $request->validated();
        try {
            $article = Article::query()->create($validated);
        } catch(\Exception $exception) {
            Log::error($exception->getMessage());
            throw new \Exception($exception->getMessage());
        }

        return $article;
    }

}
