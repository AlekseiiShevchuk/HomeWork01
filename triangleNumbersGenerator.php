<?php

function numberGenerator($limit=15)
{
    for($i=1; $i < $limit; $i++){
        yield $i;
    }
}

foreach (numberGenerator() as $number)
{
    echo ' Triangle number for ' . $number. ' is '. ($number*($number+1))/2 . ' <br> ' ;
}