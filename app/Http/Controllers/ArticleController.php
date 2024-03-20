<?php

namespace App\Http\Controllers;

use App\Enums\ArticleStatus;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Repos\ArticleRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = ArticleRepository::get();
        return view('pages.articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('pages.articles.show', compact('article'));
    }

    public function review(Article $article)
    {
        return view('pages.articles.show', [
            'article' => $article,
            'isReview' => true,
        ]);
    }

    public function create()
    {
        return view('pages.articles.create');
    }

    public function store(ArticleRequest $request)
    {
        ArticleRepository::create($request->validated());
        return to_route('articles.index')->with('swal_s', 'Berhasil membuat artikel');
    }

    public function edit(Article $article)
    {
        return view('pages.articles.edit', compact('article'));
    }

    public function update(ArticleRequest $request, Article $article)
    {
        $article->update($request->validated());
        return back()->with('swal_s', 'Berhasil mengubah artikel');
    }

    public function destroy(Article $article)
    {
        if($article->status == ArticleStatus::APPROVAL)
            return back()->with('swal_e', 'Artikel sedang direview oleh admin');

        $article->delete();
        return back()->with('swal_s', 'Berhasil menghapus artikel');
    }

    public function approval(Article $article)
    {
        $article->update(['status' => ArticleStatus::APPROVAL]);
        return back()->with('swal_s', 'Artikel akan direview oleh admin');
    }

    public function approved(Article $article)
    {
        $article->update(['status' => ArticleStatus::APPROVED]);
        return to_route('articles.index')->with('swal_s', 'Artikel telah diterbitkan');
    }

    public function denied(Article $article)
    {
        $article->update(['status' => ArticleStatus::DENIED]);
        return back()->with('swal_s', 'Artikel ditolak');
    }
}
