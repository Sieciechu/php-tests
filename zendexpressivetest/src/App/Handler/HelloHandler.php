<?php

declare(strict_types=1);

namespace App\Handler;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\HtmlResponse;

class HelloHandler implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request): ResponseInterface
    {

        $target = $request->getQueryParams()['target'] ?? 'World';
        $target = $request->getAttribute("name") ?? $target;
        $target = htmlspecialchars($target, ENT_HTML5, 'UTF-8');
        return new HtmlResponse(sprintf(
            '<h1>Hello %s</h1>',
            $target
        ));
    }
}
