<?php

namespace App\Utils;

class Validate
{
    /**
     * validates the  limit limit.
     */
    public static function validateLimit(int $limit)
    {
        if ((int) $limit > 100) {
            return false;
        }

        return true;
    }
}
