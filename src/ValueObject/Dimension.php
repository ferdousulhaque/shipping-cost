<?php

declare(strict_types=1);

namespace App\ValueObject;

class Dimension
{
    /**
     * @var float
     */
    private $length;

    /**
     * @var float
     */
    private $width;

    /**
     * @var float
     */
    private $height;

    /**
     * @var string
     */
    private $unit;

    public function __construct(
        float $length,
        float $width,
        float $height,
        string $unit
    ) {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;

        $this->unit = $unit;
    }

    /**
     * Get Length
     *
     * @return float
     */
    public function getLength(): float
    {
        return $this->length;
    }

    /*
     * Get Width
     *
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /*
     * Get height
     *
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
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
}
