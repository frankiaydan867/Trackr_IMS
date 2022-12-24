<?php

require 'vendor/autoload.php';

$f3 = \Base::instance();
$f3->config('app/config/config.ini');
$f3->config('app/config/routes.ini');
//Set Default Timezone Globally
date_default_timezone_set('America/New_York');

/**
 * DB Instance
 */
$db = new DB\SQL(
    "sqlsrv:server=" . $f3->get('DB_HOST') . ";Database=" . $f3->get('DB_NAME'),
    $f3->get('DB_USER'),
    $f3->get('DB_PASSWORD')
);
$f3->set('DB', $db);


$f3->run();
