<?php

namespace App\Traits;

trait EnumHelper
{
    public static function values()
    {
        return array_column(self::cases(), 'value');
    }
}
