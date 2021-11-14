<?php

declare(strict_types=1);

namespace App\Companies;

use App\Companies\ShippingCompaniesInterface;
use App\Entity\ShippingDetails;
use App\Enums\LocationEnum;
use App\ValueObject\Location;
use RangeException;

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
        if (($this->location->getDistance() > 5)) {
            throw new RangeException("Above 5Km is not accepted");
            return false;
        }
        return true;
    }
}
