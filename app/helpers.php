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
