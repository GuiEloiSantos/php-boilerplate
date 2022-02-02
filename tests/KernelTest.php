<?php

namespace AppTests;

use App\Kernel;
use DI\Container;
use DI\ContainerBuilder;
use PHPUnit\Framework\TestCase;

class KernelTest extends TestCase
{
    /**
     * @covers \App\Kernel::getContainer()
     * @covers \App\Kernel::boot()
     */
    public function testKernelGenerates()
    {
        $container = $this->createMock(Container::class);
        $containerBuilder = $this->createMock(ContainerBuilder::class);
        $containerBuilder->expects($this->once())
            ->method('build')
            ->willReturn($container)
        ;
        $containerBuilder->expects($this->once())
            ->method('useAutowiring')
            ->with(true)
        ;

        $kernel = new Kernel($containerBuilder);

        $this->assertInstanceOf(Container::class, $kernel->getContainer());
        $this->assertInstanceOf(Container::class, $kernel->getContainer());
    }
}
