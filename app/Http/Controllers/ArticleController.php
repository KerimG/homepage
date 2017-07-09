<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Article;

class ArticleController extends Controller
{
    public function article($articleUrl)
    {
        return view('blog.article', ['article' => Article::where('url', $articleUrl)->first()]);
    }

    public function create(Request $request)
    {
        $data = $request->all();

        $article = Article::create([
            'title' => $data['title'],
            'url' => $data['url'],
            'slug' => $data['slug'],
            'text' => $data['text']
        ]);

        return view('blog.article', ['article' => $article]);
    }
}
