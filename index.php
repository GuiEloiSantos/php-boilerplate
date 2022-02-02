<?php

// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';

use App\Kernel;
use App\RouterFactory;

$container = (new Kernel(new \DI\ContainerBuilder()))->getContainer();
$router = (new RouterFactory($container))->getRouter();

// Run it!
$router->run();
