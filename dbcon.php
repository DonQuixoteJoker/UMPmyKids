<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('umpmykids-firebase-adminsdk-9wfrp-f986f1f681.json')
    ->withDatabaseUri('https://umpmykids-default-rtdb.asia-southeast1.firebasedatabase.app/');

    $database = $factory->createDatabase();
?>