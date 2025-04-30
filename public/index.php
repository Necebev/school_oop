<?php
session_start();
ini_set('error_log', 'error_log.log');

include __DIR__ . '/../vendor/autoload.php';

use App\Routing\Router;

$router = new Router();
$router->handle();