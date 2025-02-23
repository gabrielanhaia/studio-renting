<?php

error_reporting(E_ALL);

use Symfony\Component\Dotenv\Dotenv;

if (!isset($_SERVER['APP_ENV']) || $_SERVER['APP_ENV'] === 'test') {
    if (!class_exists(Dotenv::class)) {
        throw new \RuntimeException('APP_ENV environment variable is not defined. You need to define environment variables for configuration or add "symfony/dotenv" as a Composer dependency to load variables from a .env file.');
    }
    (new Dotenv())
        ->usePutenv(true)
        ->load(__DIR__.'/../../.env');
}
