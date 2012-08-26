<?php

class Money
{
    protected $amount;
    protected $currency;

    function __construct($amnt, $crncy)
    {
        $this->amount = $amnt;
        $this->currency = $crncy;
    }

    function equals($obj)
    {
        return $this->amount == $obj->amount
            && $this->currency() === $obj->currency();
    }

    static function doller($amnt)
    {
        return new Money($amnt, "USD");
    }

    static function franc($amnt)
    {
        return new Money($amnt, "CHF");
    }

    function currency()
    {
        return $this->currency;
    }

    function super($amnt, $crncy)
    {
        $this->amount = $amnt;
        $this->currency = $crncy;
    }

    function times($multi)
    {
        return new Money($this->amount * $multi, $this->currency);
    }

}

class Doller extends Money
{

    function __construct($amnt, $crncy)
    {
        $this->super($amnt, $crncy);
    }

}


class Franc extends Money
{

    function __construct($amnt, $crncy)
    {
        $this->super($amnt, $crncy);
    }

}
