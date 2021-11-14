<?php

declare(strict_types=1);

namespace App\Helpers;

use App\Enums\DistanceUnit;

class DistanceConverter
{
    const MILES_MULTIPLIER = 0.621371;

    /**
     * Convert to Kilometer
     *
     * @param float $value
     * @param string $to
     * @return float
     */
    public static function convertToKm($value, $givenUnit): float
    {
        switch ($givenUnit) {
            case DistanceUnit::KILOMETER:
                return $value;
            case DistanceUnit::MILES:
                return self::MILES_MULTIPLIER * $value;
            default:
                return $value;
        }
    }
}
