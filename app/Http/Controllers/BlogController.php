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

    public function blogEntryPage($entryUrl)
    {
        return view('blog.blogEntry', ['blogEntry' => BlogEntry::where('url', $entryUrl)->first()]);
    }

    public function create(Request $request)
    {
        $data = $request->all();

        $blogEntry = BlogEntry::create([
            'title' => $data['title'],
            'url' => $data['url'],
            'slug' => $data['slug'],
            'text' => $data['text']
        ]);

        return view('blog.blogEntry', ['blogEntry' => $blogEntry]);
    }
}
