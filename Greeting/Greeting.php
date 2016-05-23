<?php

namespace Greeting;

class Greeting
{
    use RandomQuote;

    public function say($name)
    {
        return 'Hi, ' . $name . '! There is a new quote for you: ' . $this->getRandomQuote();
    }
}