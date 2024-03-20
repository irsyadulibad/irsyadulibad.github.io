<?php

namespace App\Enums;

use App\Traits\EnumHelper;

enum RoleEnum: string
{
    use EnumHelper;

    case ADMIN = 'admin';
    case WRITER = 'writer';
}
