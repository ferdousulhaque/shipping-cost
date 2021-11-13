<?php

declare(strict_types=1);

namespace App\Helpers;

use App\ValueObject\Dimension;

trait VolumeCalculator
{
    /**
     *
     * @param Dimension $dimension
     * @return float
     */
    public static function getVolume(Dimension $dimension): float
    {
        return $dimension->getLength()
            * $dimension->getWidth()
            * $dimension->getHeight();
    }
}
