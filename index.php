<?php

require 'vendor/autoload.php';

$f3 = \Base::instance();
$f3->config('app/config/config.ini');
$f3->config('app/config/routes.ini');
date_default_timezone_set('America/New_York');

// echo gethostbyname("www.google.com");

/**
 * DB Instance
 */
$db = new DB\SQL(
    "mysql:host=" . $f3->get('DB_HOST') . ";port=" . $f3->get('DB_PORT') . ";dbname=" . $f3->get('DB_NAME'),
    $f3->get('DB_USER'),
    $f3->get('DB_PASSWORD')
);
$f3->set('DB', $db);

$f3->run();
