<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function frontpage()
    {
        $latestArticle = Article::orderBy('created_at', 'desc')->take(5)->get();
        return view('blog.frontpage', ['latestArticles' => $latestArticle]);
    }
}
