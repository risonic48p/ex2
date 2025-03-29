<?php

namespace Tests\Unit;

use App\Repositories\IntervalRepository;
use PHPUnit\Framework\MockObject\Exception;
use Tests\TestCase;
use App\Repositories\Interfaces\IntervalRepositoryInterface;
use Illuminate\Support\Collection;

class IntervalRepositoryTest extends TestCase
{

    /**
     *  IntervalRepository
     * @var IntervalRepositoryInterface
     */
    private IntervalRepositoryInterface $intervalRepository;

    /**
     * @throws Exception
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->intervalRepository = $this->createMock(IntervalRepository::class);
    }


    public function test_class_type(): void
    {
        $this->assertInstanceOf(IntervalRepository::class, $this->intervalRepository);
    }

    /**
     * @return void
     */
    public function test_collections(): void
    {
        $this->assertInstanceOf(Collection::class, $this->intervalRepository->getAll());
        $this->assertInstanceOf(Collection::class, $this->intervalRepository->getIntersections(15,30));
    }
}
