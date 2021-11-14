<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
*/

use App\Companies\Dhl;
use App\Companies\Fedex;
use App\Companies\Pathao;
use App\CostCalculator;
use App\Entity\Product;
use App\Entity\ShippingDetails;
use App\Enums\DimensionUnit;
use App\Enums\WeightUnit;
use App\ValueObject\Dimension;
use App\ValueObject\Weight;
use App\ValueObject\Location;

require __DIR__ . '/vendor/autoload.php';

$dimension = new Dimension(
    2.1,
    3.2,
    5.0,
    DimensionUnit::METER
);

$weight = new Weight(
    10.0,
    WeightUnit::KILO
);

$location = new Location(
    'dhk',
    'khl'
);

$product = new Product(
    $dimension,
    $weight
);

$shippingDetails = new ShippingDetails(
    $product,
    $location
);

$product = new Product($dimension, $weight);

$companies = [
    'dhl' => new Dhl($shippingDetails),
    'fedex' => new Fedex($shippingDetails),
    'pathao' => new Pathao($shippingDetails),
];

// Selecting the algorithm based on run instruction means, Strategy Design Pattern

// DHL Cost
$cost = new CostCalculator($companies['dhl']);
echo 'DHL Cost:' . $cost->getCost() . PHP_EOL;

// DHL Cost
$cost = new CostCalculator($companies['fedex']);
echo 'Fedex Cost:' . $cost->getCost() . PHP_EOL;

// Pathao Cost
$cost = new CostCalculator($companies['pathao']);
echo 'Pathao Cost:' . $cost->getCost() . PHP_EOL;
