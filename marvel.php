<?php

require __DIR__ . '/vendor/autoload.php';

use Marvel\NewYork\HankPym;
use Marvel\NewYork\IronMan;
use Marvel\NewJersey\Wasp;
use Marvel\NewJersey\WonderMan;
use Marvel\Asgard\Thor;
use Marvel\England\CaptainBritain;
use Marvel\Illinois\Beast;

echo HankPym::whoami() . '<br>';
echo Wasp::whoami() . '<br>';
echo Thor::whoami() . '<br>';
echo IronMan::whoami() . '<br>';
echo WonderMan::whoami() . '<br>';
echo CaptainBritain::whoami() . '<br>';
echo Beast::whoami() . '<br>';