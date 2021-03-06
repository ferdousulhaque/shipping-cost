<?php

declare(strict_types=1);

namespace App\ValueObject;

use App\Helpers\DistanceConverter;

class Location
{
    private $from;
    private $to;
    private $distance;
    private $unit;
    private $special_instruction;

    /**
     * Undocumented function
     *
     * @param string $from
     * @param string $to
     * @param float $float
     * @param DistanceUnit $unit
     * @param string $special_instruction
     */
    public function __construct(string $from, string $to, float $distance, string $unit, ?string $special_instruction = "")
    {
        $this->from = $from;
        $this->to = $to;
        $this->distance = $distance;
        $this->unit = $unit;
        $this->special_instruction = $special_instruction;
    }

    /**
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     *
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /*
     * Get Unit
     *
     * @return float
     */
    public function getDistance(): float
    {
        return DistanceConverter::convertToKm($this->distance, $this->unit);
    }

    /**
     *
     * @return string
     */
    public function getSpecialInstruction()
    {
        return $this->special_instruction;
    }
}
