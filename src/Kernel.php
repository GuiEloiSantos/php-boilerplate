<?php

namespace App;

use DI\Container;
use DI\ContainerBuilder;

class Kernel
{
    private ContainerBuilder $containerBuilder;

    public function __construct(ContainerBuilder $containerBuilder)
    {
        $this->containerBuilder = $containerBuilder;
    }

    private ?Container $container = null;

    private function boot(): void
    {
        $this->containerBuilder->useAutowiring(true);

        $this->container = $this->containerBuilder->build();
    }

    public function getContainer(): Container
    {
        if ($this->container === null) {
            self::boot();
        }

        return $this->container;
    }
}
