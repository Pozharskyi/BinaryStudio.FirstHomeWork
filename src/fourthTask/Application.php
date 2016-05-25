<?php


namespace fourthTask;

use secondTask\RandomQuote as Quote;

class Application
{
    public static function run()
    {
        echo Quote::getRandQuote();
    }
}