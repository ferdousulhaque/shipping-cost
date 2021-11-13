<?php

declare(strict_types=1);

namespace App\ValueObject;

use App\Enums\WeightUnit;
use App\Helpers\WeightConverter;

class Weight
{
    /**
     * @var float
     */
    private $weight;

    /**
     * @var string
     */
    private $unit;

    public function __construct(
        float $weight,
        string $unit
    ) {
        $this->weight = $weight;
        $this->unit = $unit;
    }

    /**
     * Get Weight
     *
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /*
     * Get Unit
     *
     * @return float
     */
    public function getUnit(): string
    {
        return $this->unit;
    }

    /*
     * Get Unit
     *
     * @return float
     */
    public function getValue(): float
    {
        return WeightConverter::convertToKilo($this->weight, $this->unit);
    }
}
