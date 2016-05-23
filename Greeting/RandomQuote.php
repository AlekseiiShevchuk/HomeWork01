<?php

namespace Greeting;

trait RandomQuote
{
    private $quotes = [
        'quote 1',
        'quote 2',
        'quote 3',
        'quote 4',
        'quote 5',
        'quote 6',
        'quote 7',
        'quote 8',
        'quote 9',
        'quote 10'
    ];
    
    public function getRandomQuote()
    {
        $rand = array_rand($this->quotes);
        return $this->quotes[$rand];
    }
}