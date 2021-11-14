<?php

declare(strict_types=1);

namespace App\Companies;

use App\Companies\ShippingCompaniesInterface;
use App\Entity\ShippingDetails;

class Fedex implements ShippingCompaniesInterface
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
        ShippingDetails $shippingDetails
    ) {
        $this->product = $shippingDetails->product;
    }

    public function getCost(): float
    {
        return $this->product->getVolume() * 1.5 +
            $this->product->getWeight()->getValue() * 1.5;
    }

    public function supports(): bool
    {
        return true;
    }
}
