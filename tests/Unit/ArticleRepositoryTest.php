<?php

namespace Tests\Unit;

use App\Repositories\ArticleRepository;
use PHPUnit\Framework\MockObject\Exception;
use Tests\TestCase;
use App\Repositories\Contracts\ArticleRepositoryInterface;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class ArticleRepositoryTest extends TestCase
{

    /**
     * @var ArticleRepositoryInterface
     */
    private ArticleRepositoryInterface $repository;

    /**
     * @throws Exception
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->repository = $this->createMock(ArticleRepository::class);
    }



    /**
     * @return void
     */
    public function test_instances(): void
    {
        $this->assertInstanceOf(ArticleRepository::class, $this->repository);
        $this->assertInstanceOf(Collection::class, $this->repository->all());
        $this->assertInstanceOf(LengthAwarePaginator::class, $this->repository->paginated(5));
    }
}
