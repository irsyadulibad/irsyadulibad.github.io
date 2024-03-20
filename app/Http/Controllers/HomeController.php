<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $articles = Article::where('status', 'approved')->latest()->get();
        return view('pages.home', compact('articles'));
    }
}
