<?php

namespace App\Repos;

use App\Enums\ArticleStatus;
use App\Enums\RoleEnum;
use App\Models\Article;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ArticleRepository
{
    public static function get()
    {
        $user = Auth::user();
        $articles = Article::query();

        if($user->role == RoleEnum::ADMIN)
            return $articles->with('user')->get();

        return $articles->where('user_id', $user->id)
            ->get();
    }

    public static function create(array $data)
    {
        $user = Auth::user();

        $data['user_id'] = $user->id;
        $data['status'] = ArticleStatus::DRAFT;

        return Article::create($data);
    }
}
