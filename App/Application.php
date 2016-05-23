<?php

namespace App;

use Greeting\Greeting;

class Application
{
    public function run($name)
    {
        return (new Greeting())->say($name);
    }
}