<?php


namespace secondTask;

require_once __DIR__ . '/../../vendor' . '/autoload.php';

class Greeting
{
    use RandomQuote;

    public static function say($name = "Mr Smith")
    {
        echo "Hi, " . $name . "! There is a new quote for you: " . PHP_EOL . self::getRandQuote();
    }
}

echo Greeting::say("John");