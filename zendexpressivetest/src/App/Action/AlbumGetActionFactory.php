<?php

declare(strict_types=1);

namespace App\Action;

use Psr\Container\ContainerInterface;

class AlbumGetActionFactory
{
    public function __invoke(ContainerInterface $container) : AlbumGetAction
    {
        file_put_contents('/dev/stderr', __FILE__.__LINE__.PHP_EOL, FILE_APPEND);
        return new AlbumGetAction();
    }
}
