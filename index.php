<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
*/

use App\Companies\DhlCalculator;
use App\Companies\FedexCalculator;
use App\CostCalculator;
use App\Entity\Product;
use App\Enums\DimensionUnit;
use App\Enums\WeightUnit;
use App\ValueObject\Dimension;
use App\ValueObject\Weight;

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

$product = new Product($dimension, $weight);

$companies = [
    'dhl' => new DhlCalculator($product),
    'fedex' => new FedexCalculator($product),
];

// DHL Cost
$cost = new CostCalculator($companies['dhl']);
echo 'DHL Cost:' . $cost->cost() . PHP_EOL;

// DHL Cost
$cost = new CostCalculator($companies['fedex']);
echo 'Fedex Cost:' . $cost->cost() . PHP_EOL;
