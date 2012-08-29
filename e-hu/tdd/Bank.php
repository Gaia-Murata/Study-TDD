<?php

require_once 'Money.php';

/**
 * @author Ethan Hu
 * 
 * Chapter 14
 */
class Bank
{
    public static $rates = array();

    public static function addRate($fromCurrency, $toCurrency, $rate)
    {
        self::$rates[$fromCurrency . $toCurrency] = $rate;
        self::$rates[$toCurrency . $fromCurrency] = 1 / $rate;
    }

    public static function getRate($fromCurrency, $toCurrency)
    {
        return self::$rates[$fromCurrency . $toCurrency];
    }

    public static function reduce($money, $toCurrency)
    {
        if($money->getCurrency() === $toCurrency){
            return $money;
        }else{
            return new Money($money->getAmount() * self::getRate($money->getCurrency(), $toCurrency), $toCurrency);
        }
    }

}
