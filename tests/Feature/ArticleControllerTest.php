<?php

namespace Tests\Feature;


use App\Http\Requests\ArticleFormRequest;
use App\Models\Article;
use Tests\TestCase;

class ArticleControllerTest extends TestCase
{


    public function test_the_routes_returns_a_successful_response(): void
    {
        $this->get('/')->assertStatus(200);
        $this->get('/article/new')->assertStatus(200);
        $this->get('/article/21')->assertStatus(200);
    }


    public function test_create_article(): void
    {
        $data = Article::factory()->definition();
        $data['_token'] = 'coffee';
        $this->withSession(['_token' => $data['_token']])
            ->post('/article/new', $data)->assertStatus(302);
    }

}
