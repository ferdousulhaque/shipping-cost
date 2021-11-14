<?php

declare(strict_types=1);

namespace App\ValueObject;

class Location
{
    private $from;
    private $to;
    private $distance;
    private $special_instruction;

    /**
     * Undocumented function
     *
     * @param string $from
     * @param string $to
     * @param float $float
     * @param string $special_instruction
     */
    public function __construct(string $from, string $to, float $distance, ?string $special_instruction = "")
    {
        $this->from = $from;
        $this->to = $to;
        $this->distance = $distance;
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

    /**
     *
     * @return string
     */
    public function getDistance()
    {
        return $this->distance;
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
