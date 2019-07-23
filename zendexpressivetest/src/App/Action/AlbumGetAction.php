<?php

declare(strict_types=1);

namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\JsonResponse;

class AlbumGetAction implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request) : ResponseInterface
    {
        file_put_contents('/dev/stderr', __FILE__.__LINE__.PHP_EOL, FILE_APPEND);
        return new JsonResponse(['album-id' => $request->getAttribute("id")]);
    }
}
