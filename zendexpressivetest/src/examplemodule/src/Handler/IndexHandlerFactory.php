<?php

declare(strict_types=1);

namespace examplemodule\Handler;

use Psr\Container\ContainerInterface;

class IndexHandlerFactory
{
    public function __invoke(ContainerInterface $container) : IndexHandler
    {
        return new IndexHandler();
    }
}
