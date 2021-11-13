<?php

declare(strict_types=1);

namespace App\Companies;

use App\Companies\ShippingCompaniesInterface;
use App\Entity\Product;

class FedexCalculator implements ShippingCompaniesInterface
{
    /**
     *
     * @var Product
     */
    private $product;

    /**
     *
     * @param Product $product
     */
    public function __construct(
        Product $product
    ) {
        $this->product = $product;
    }

    public function cost(): float
    {
        return $this->product->getVolume() * 1.5 +
            $this->product->getWeight()->getValue() * 1.5;
    }
}
