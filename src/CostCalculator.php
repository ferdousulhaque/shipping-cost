<?php

declare(strict_types=1);

namespace App;

use App\Companies\ShippingCompaniesInterface;

class CostCalculator
{
    public $shippingCompany;

    /**
     * 
     *
     * @param ShippingCompanitesInterface $shippingCompany
     */
    public function __construct(ShippingCompaniesInterface $shippingCompany)
    {
        $this->shippingCompany = $shippingCompany;
    }

    /**
     * 
     *
     * @return void
     */
    public function cost()
    {
        return $this->shippingCompany->cost();
    }
}
