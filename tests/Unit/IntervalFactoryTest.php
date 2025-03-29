<?php

namespace Tests\Unit;


use PHPUnit\Framework\MockObject\Exception;
use Tests\TestCase;
use App\Models\Interval;
use Database\Factories\IntervalFactory;

class IntervalFactoryTest extends TestCase
{

    /**
     * @var IntervalFactory
     */
    private IntervalFactory $intervalFactory;

    /**
     * @return void
     * @throws Exception
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->intervalFactory = $this->createMock(IntervalFactory::class);
    }

    /**
     * @return void
     */
    public function test_segment_generation(): void
    {
        $segment = $this->intervalFactory->generateRandomSegment();
        $this->assertIsArray($segment);
    }

    /**
     * @return void
     */
    public function test_factory_create_model(): void
    {
        $interval = Interval::factory()->create();
        $this->assertInstanceOf(Interval::class, $interval);
        $this->assertModelExists($interval);
    }

}
