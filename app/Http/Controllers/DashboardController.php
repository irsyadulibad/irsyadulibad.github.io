<?php

namespace App\Http\Controllers;

use App\Enums\RoleEnum;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return view('pages.dashboard', [
            'drafts' => $this->getTotal('draft'),
            'approvals' => $this->getTotal('approval'),
            'approves' => $this->getTotal('approved'),
            'denies' => $this->getTotal('denied'),
        ]);
    }

    private function getTotal(string $status): int
    {
        $user = Auth::user();
        $query = Article::where('status', $status);

        if($user->role == RoleEnum::WRITER)
            $query->where('user_id', $user->id);

        return $query->count();
    }
}
