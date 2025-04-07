<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Services\Contracts\ArticleServiceInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ArticleFormRequest;


class ArticleController extends Controller
{

    /**
     * @var ArticleServiceInterface
     */
    private ArticleServiceInterface $articleService;

    /**
     * Constructor
     * @param ArticleServiceInterface $articleService
     */
    public function __construct(ArticleServiceInterface $articleService)
    {
        $this->articleService = $articleService;
    }


    /**
     * @return View
     */
    public function index(): View
    {
        return view('article.list', [
            'articles' => $this->articleService->paginated(5)
        ]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleFormRequest $request): RedirectResponse
    {
        $article =  $this->articleService->make($request);

        return to_route('article.show', ['article' => $article])
            ->with('success', 'Статья успешно создана.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article): View
    {
        return view('article.show', ['article' => $article]);
    }

}
