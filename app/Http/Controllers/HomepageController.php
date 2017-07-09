<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $lastArticle = Article::orderBy('created_at', 'desc')->first();
        return view('index', ['lastArticle' => $lastArticle]);
    }

    public function imprint()
    {
        return view('imprint');
    }
}
