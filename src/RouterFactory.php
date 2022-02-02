<?php

namespace App;

use Bramus\Router\Router as BaseRouter;
use DI\Container;

class RouterFactory
{
    private BaseRouter $router;
    private Container $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function getRouter(): BaseRouter
    {
        $this->router = new BaseRouter();
        $this->configureRouter();

        return $this->router;
    }

    /**
     * @coversNothing
     */
    private function configureRouter(): void
    {
    }
}
