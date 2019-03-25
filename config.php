<?php

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

$GLOBALS['config'] = array(
    /**
     * List of servers available for all users
     */
    'servers' => array(
        /* 'Local Beanstalkd' => 'beanstalk://localhost:11300', ... */
        env('BEANSTALK_SV1_NAME', 'Local Beanstalkd') => env('BEANSTALK_SV1_ADDR', 'beanstalk://localhost:11300')
    ),
    /**
     * Saved samples jobs are kept in this file, must be writable
     */
    'storage' => dirname(__FILE__) . DIRECTORY_SEPARATOR . 'storage.json',
    /**
     * Optional Basic Authentication
     */
    'auth' => array(
        'enabled' => env('INTERFACE_LOGIN_ENABLED', true),
        'username' => env('INTERFACE_USER', 'admin'),
        'password' => env('INTERFACE_PASS', 'password'),
    ),
    /**
     * Version number
     */
    'version' => '1.7.10',
);
