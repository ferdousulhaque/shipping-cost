<?php

declare(strict_types=1);

namespace App\Helpers;

use App\Enums\WeightUnit;

class WeightConverter
{
    const POUND_MULTIPLIER = 2.20462;

    /**
     * Convert to Kilogram
     *
     * @param float $value
     * @param string $to
     * @return float
     */
    public static function convertToKilo($value, $givenUnit): float
    {
        switch ($givenUnit) {
            case WeightUnit::KILO:
                return $value;
            case WeightUnit::POUND:
                return self::POUND_MULTIPLIER * $value;
            default:
                return $value;
        }
    }
}
