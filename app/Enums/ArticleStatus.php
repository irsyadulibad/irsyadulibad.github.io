<?php

namespace App\Enums;

use App\Traits\EnumHelper;

enum ArticleStatus: string
{
    use EnumHelper;

    case DRAFT = 'draft';
    case APPROVAL = 'approval';
    case APPROVED = 'approved';
    case DENIED = 'denied';
}
