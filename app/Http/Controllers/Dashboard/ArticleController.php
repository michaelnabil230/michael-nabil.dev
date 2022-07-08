<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreArticleRequest;
use App\Http\Requests\Dashboard\UpdateArticleRequest;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate();

        return view('dashboard.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('dashboard.articles.create');
    }

    public function store(StoreArticleRequest $request)
    {
        //
    }

    public function show(Article $article)
    {
        //
    }

    public function edit(Article $article)
    {
        //
    }

    public function update(UpdateArticleRequest $request, Article $article)
    {
        //
    }

    public function destroy(Article $article)
    {
        //
    }
}
