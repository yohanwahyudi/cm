<?php
use Monolog\Logger;
use Monolog\Handler\RotatingFileHandler;

use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\MessageFormatter;

$logger = new Logger('ItopAPILog');
$logger->pushHandler(new RotatingFileHandler(storage_path('logs/api-itop.log')), Logger::DEBUG);

$stack = HandlerStack::create();

$stack->push(
Middleware::log(
    $logger,
    new MessageFormatter('{req_body} - {res_body}')
    )
);


?>
