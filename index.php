<?php

require __DIR__.'/vendor/autoload.php';
use Symfony\Component\HttpFoundation\Request;
use ModernFramework\Application;

$request = Request::createFromGlobals();
include __DIR__ . '/config/routes.php';
$kernel = new Application();
$response = $kernel->handle($request);
$response->send();
