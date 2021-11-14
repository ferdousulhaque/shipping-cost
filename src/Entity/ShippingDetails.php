<?php

declare(strict_types=1);

namespace App\Entity;

use App\ValueObject\Dimension;
use App\ValueObject\Weight;
use App\ValueObject\Location;

class ShippingDetails
{
    public $product;
    public $location;

    public function __construct(Product $product, Location $location)
    {
        $this->product = $product;
        $this->location = $location;
    }
}
