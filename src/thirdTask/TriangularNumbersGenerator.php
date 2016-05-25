<?php


namespace thirdTask;


class TriangularNumbersGenerator
{
    public static function generateTriangularNumbers($limit = 15)
    {
        for ($i = 1; $i <= $limit; $i++) {
            yield (0.5 * $i * ($i + 1));
        }
    }
}