<?php

declare(strict_types=1);

namespace App\Handler;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Diactoros\Response\JsonResponse;

class HelloHandler implements RequestHandlerInterface
{
    private $property1;

    public function __construct(String $string)
    {
        $this->property1 = $string;
    }
    public function handle(ServerRequestInterface $request): ResponseInterface
    {

        file_put_contents('/dev/stderr', __FILE__.__LINE__.PHP_EOL, FILE_APPEND);
        $target = $request->getQueryParams()['target'] ?? 'World';
        $target = $request->getAttribute("name") ?? $target;
        $target = htmlspecialchars($target, ENT_HTML5, 'UTF-8');
        return new JsonResponse([
            'target' => $target,
            'property1' => $this->property1,
        ]);

//        return new HtmlResponse(sprintf(
//            '<h1>Hello %s</h1>',
//            $target
//        ));
    }
}
