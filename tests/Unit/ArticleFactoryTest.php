<?php

namespace Tests\Unit;


use PHPUnit\Framework\MockObject\Exception;
use Tests\TestCase;
use App\Models\Article;

class ArticleFactoryTest extends TestCase
{

    /**
     * @return void
     */
    public function test_factory_create_model(): void
    {
        $article = Article::factory()->create();
        $this->assertInstanceOf(Article::class, $article);
        $this->assertModelExists($article);
    }

}
