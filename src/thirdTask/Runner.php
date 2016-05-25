<?php


namespace thirdTask;

require_once __DIR__ . '/../../vendor' . '/autoload.php';

class Runner
{
    public static function run()
    {
        $generator = TriangularNumbersGenerator::generateTriangularNumbers();
        echo "Triangular numbers:" . PHP_EOL;
        foreach ($generator as $value) {
            echo $value . ' ';
        }
    }
}

Runner::run();