<?php


namespace secondTask;


trait RandomQuote
{
    private static $quotes = [
        "Opportunities don't happen. You create them. (C) Chris Grosser",
        "I find that the harder I work, the more luck I seem to have. (C) Thomas Jefferson",
        "The way to get started is to quit talking and begin doing. (C) Walt Disney",
        "Many of life's failures are people who did not realize how close they were to success when they gave up. (C) Thomas Edison",
        "Physics is like sex: sure, it may give some practical results, but that's not why we do it. (C) Richard Feynman",
        "Most good programmers do programming not because they expect to get paid or get adulation by the public, but because it is fun to program. (C) Linus Torvalds",
        "Always code as if the guy who ends up maintaining your code will be a violent psychopath who knows where you live. (C) Martin Golding"
    ];

    public static function getRandQuote()
    {
        $quoteNumber = array_rand(self::$quotes);
        return self::$quotes[$quoteNumber];
    }
}