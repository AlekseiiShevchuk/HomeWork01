<?php

require __DIR__ . '/vendor/autoload.php';

use Greeting\Greeting;

$name = 'Vasiliy';
$randomQuote = new Greeting();
echo $randomQuote->say($name);

