<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Kernel;

$container = (new Kernel(new \DI\ContainerBuilder()))->getContainer();

