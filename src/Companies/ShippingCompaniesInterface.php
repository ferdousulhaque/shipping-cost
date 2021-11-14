<?php

namespace App\Companies;

interface ShippingCompaniesInterface
{
    public function getCost(): float;
    public function supports(): bool;
}
