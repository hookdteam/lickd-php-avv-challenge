<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;
use App\Console\PriceCalculatorConsole;

$application = new Application();
$application->add(new PriceCalculatorConsole());
$application->run();
