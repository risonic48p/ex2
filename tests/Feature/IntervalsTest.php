<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IntervalsTest extends TestCase
{
    /**
     * Test intervals intersections in console command.
     */
    public function test_intervals_intersections_success(): void
    {
        $this->artisan('intervals:list --left=15 --right=30')->assertSuccessful();
    }

    /**
     * Invalid options types
     */
    public function test_intervals_intersections_fail(): void
    {
        $this->artisan('intervals:list --left=15ee --right=30dd')->assertFailed();
    }

}
