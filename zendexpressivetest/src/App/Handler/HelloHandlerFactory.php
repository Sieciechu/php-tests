<?php

declare(strict_types=1);

namespace App\Handler;

use Psr\Container\ContainerInterface;

class HelloHandlerFactory
{
    public function __invoke(ContainerInterface $container) : HelloHandler
    {
        file_put_contents('/dev/stderr', __FILE__.__LINE__.PHP_EOL, FILE_APPEND);
        return new HelloHandler("testtt");
    }
}
