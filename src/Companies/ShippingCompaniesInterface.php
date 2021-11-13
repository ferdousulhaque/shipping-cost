<?php

namespace App\Companies;

interface ShippingCompaniesInterface
{
    public function cost(): float;
    // public function supports(): bool;
}
