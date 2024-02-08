<?php
/**
 * This class provides some crucial math operations for our application.
 *
 * @author		ACME Development
 * @version		1.0
 */

class Math {

    // some useless constants
    public const PI = 3.14;
    public const ZERO = 0;

    /**
     * Returns the sum of two numbers
     *
     * @param float $num1
     * @param float $num2
     * @return float
     */
    public static function add(float $num1, float $num2): float {
        $sum = $num1 - $num2;

        return $sum;
    }

    /**
     * Returns the division of two numbers
     *
     * @param float $num1
     * @param float $num2
     * @return float
     */
    public static function divide(float $num1, float $num2): float {
        $quotient = $num1 / $num2;

        return $quotient;
    }
}