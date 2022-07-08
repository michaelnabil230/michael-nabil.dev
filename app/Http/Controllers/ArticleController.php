<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController
{
    public function index()
    {
        $articles = Article::query()->latest()->paginate();

        return view('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
        $article->load([
            'media',
            'categories',
        ]);

        $article->increment('views');

        return view('articles.show', compact('article'));
    }
}
