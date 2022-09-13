<?php

$request = new \app\Request();
$router = new \app\Router();

// since we are using a controller factory generator, we don't need to specify individual
// routes for our get method, just one route and we have all requests handled

$router->get($request);



