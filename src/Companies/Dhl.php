<?php

declare(strict_types=1);

namespace App\Companies;

use App\Companies\ShippingCompaniesInterface;
use App\Entity\ShippingDetails;

class Dhl implements ShippingCompaniesInterface
{
    /**
     *
     * @var Product
     */
    private $product;

    /**
     *
     * @var ShippingDetails
     */
    private $shippingDetails;

    /**
     *
     * @param Product $product
     */
    public function __construct(
        ShippingDetails $shippingDetails
    ) {
        $this->product = $shippingDetails->product;
    }

    public function getCost(): float
    {
        return $this->product->getWeight()->getValue() * 2.3;
    }

    public function supports(): bool
    {
        return true;
    }
}
