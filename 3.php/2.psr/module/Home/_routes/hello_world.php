<?php
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Laminas\Diactoros\Response\JsonResponse;

$router->get('/', function (ServerRequestInterface $request) : ResponseInterface {
    return new JsonResponse('Hello world!');
});
