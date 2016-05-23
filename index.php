<?php

require __DIR__ . '/vendor/autoload.php';

if (php_sapi_name() == 'cli-server') {
    $app = new App\Application();
    echo $app->run('Vasiliy');
} else {
    echo 'This file works only if runs under internal php server';
}
