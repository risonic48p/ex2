<?php

namespace Tests\Unit;

use App\Services\ArticleService;
use PHPUnit\Framework\MockObject\Exception;
use Tests\TestCase;
use App\Services\Contracts\ArticleServiceInterface;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Article;
use App\Http\Requests\ArticleFormRequest;

class ArticleServiceTest extends TestCase
{

    /**
     * @var ArticleServiceInterface
     */
    private ArticleServiceInterface $service;

    /**
     * @throws Exception
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->service = $this->createMock(ArticleService::class);
    }


    /**
     * @return void
     * @throws \Exception
     */
    public function test_instances(): void
    {
        $this->assertInstanceOf(ArticleService::class, $this->service);
        $this->assertInstanceOf(Collection::class, $this->service->all());
        $this->assertInstanceOf(LengthAwarePaginator::class, $this->service->paginated(5));

        $data = Article::factory()->definition();
        $request = new ArticleFormRequest($data);
        $this->assertInstanceOf(Article::class, $this->service->make($request));
    }
}
