<?php

class Speedometer
{
    const CONVERT = 1.61;

    public static function convertKmToMiles(float $km): float
    {
        return round($km / self::CONVERT, 2);
    }

    public static function convertMilesToKm(float $miles): float
    {
        return  round($miles * self::CONVERT, 2);
    }
}
