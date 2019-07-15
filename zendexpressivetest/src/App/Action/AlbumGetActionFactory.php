<?php

declare(strict_types=1);

namespace App\Action;

use Psr\Container\ContainerInterface;

class AlbumGetActionFactory
{
    public function __invoke(ContainerInterface $container) : AlbumGetAction
    {
        return new AlbumGetAction();
    }
}
