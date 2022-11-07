<?php

class Speedometer
{
    private const COEFF_KM_TO_MILES = 0.6214;
    private const COEFF_MILES_TO_KM = 1.6093;

    public static function convertKmToMiles(float $value): float
    {
        return $value / self::COEFF_KM_TO_MILES;
    }
    
    public static function convertMilesToKm(float $value): float
    {
        return $value / self::COEFF_MILES_TO_KM;
    }
}