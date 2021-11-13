<?php

declare(strict_types=1);

namespace App\Entity;

use App\Helpers\VolumeCalculator;
use App\ValueObject\Dimension;
use App\ValueObject\Weight;

class Product
{

    /**
     *
     * @var Dimension
     */
    private $dimension;

    /**
     *
     * @var Weight
     */
    private $weight;

    use VolumeCalculator;

    /**
     *
     * @param Dimension $dimension
     * @param Weight $weight
     */
    public function __construct(Dimension $dimension, Weight $weight)
    {
        $this->dimension = $dimension;
        $this->weight = $weight;
    }

    /**
     * Get Weight Object
     *
     * @return Weight
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Get Dimension Object
     *
     * @return Dimension
     */
    public function getDimension()
    {
        return $this->dimension;
    }

    /**
     * Get Dimension Object
     *
     * @return float
     */
    public function getVolume()
    {
        return VolumeCalculator::getVolume($this->dimension);
    }
}
