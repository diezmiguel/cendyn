<?php

namespace App\Utils;

class Validate
{
    public static function validateLimit($limit)
    {
        if ((int) $limit > 100) {
            return false;
        }

        return true;
    }
}
