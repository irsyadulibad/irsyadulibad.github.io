<?php

use App\Enums\ArticleStatus;

function showArticleStatus(ArticleStatus $status) {
    return match ($status) {
         ArticleStatus::DRAFT => 'Draft',
         ArticleStatus::APPROVAL => 'Menunggu Review',
         ArticleStatus::APPROVED => 'Terpublikasi',
         ArticleStatus::DENIED => 'Ditolak',
    };
}


function greeting() {
    $hour = date('G');

    if ($hour >= 5 && $hour < 11) {
        return 'Selamat pagi';
    } elseif ($hour >= 11 && $hour < 15) {
        return 'Selamat siang';
    } elseif ($hour >= 15 && $hour < 18) {
        return 'Selamat sore';
    } else {
        return 'Selamat malam';
    }
}
