<?php

namespace App\Http\Controllers;

use App\BlogEntry;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $lastBlogEntry = BlogEntry::orderBy('created_at', 'desc')->first();
        return view('index', ['lastBlogEntry' => $lastBlogEntry]);
    }

    public function imprint()
    {
        return view('imprint');
    }
}
