<?php

use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/hello[/{name}]', function (Request $request, Response $response)
{
    $name = $request->getAttribute('name');
    $greeting = $this->greeter->greet($name);
    $response->getBody()->write($greeting);

    return $response;
});