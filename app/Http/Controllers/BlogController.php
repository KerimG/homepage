<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\BlogEntry;

class BlogController extends Controller
{
    public function frontpage()
    {
        $latestBlogEntries = BlogEntry::orderBy('created_at', 'desc')->take(5)->get();
        return view('blog.frontpage', ['latestBlogEntries' => $latestBlogEntries]);
    }
}
