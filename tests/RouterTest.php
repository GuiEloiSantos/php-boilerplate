<?php

use App\Kernel;
use App\RouterFactory;
use Bramus\Router\Router;
use DI\ContainerBuilder;
use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase
{
    public function testGetRouterReturnsRouter() {
        $container = (new Kernel(new ContainerBuilder()))->getContainer();
        $router = (new RouterFactory($container))->getRouter();

        $this->assertInstanceOf(Router::class, $router);
    }
}
