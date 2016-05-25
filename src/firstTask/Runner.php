<?php


namespace firstTask;

require_once __DIR__ . '/../../vendor' . '/autoload.php';

use Marvel\NewYork\IronMan;

class Runner
{
    public static function run()
    {
        echo IronMan::whoami();
    }
}

Runner::run();