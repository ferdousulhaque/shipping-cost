<?php

declare(strict_types=1);

namespace App\Companies;

use App\Companies\ShippingCompaniesInterface;
use App\Entity\ShippingDetails;
use App\Enums\LocationEnum;
use App\ValueObject\Location;

class Pathao implements ShippingCompaniesInterface
{
    /**
     *
     * @var Product
     */
    private $product;

    /**
     *
     * @var Location
     */
    private $location;

    /**
     *
     * @param Product $product
     */
    public function __construct(
        ShippingDetails $shippingDetails
    ) {
        $this->product = $shippingDetails->product;
        $this->location = $shippingDetails->location;
    }

    public function getCost(): float
    {
        return ($this->location->getTo() === LocationEnum::DHAKA) ? 100 : 120;
    }

    public function supports(): bool
    {
        return true;
    }
}
