<?php

class Money
{
    protected $amount;
    protected $currency;


    function equals($obj)
    {
        return $this->amount == $obj->amount
            && get_class($this) == get_class($obj);
    }

    function doller($amnt)
    {
        return new Doller($amnt, "USD");
    }

    function franc($amnt)
    {
        return new Franc($amnt, "CHF");
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

}

class Doller extends Money
{

    function Doller($amnt, $crncy)
    {
        $this->super($amnt, $crncy);
    }

    function times($multi)
    {
        return new Doller($this->amount * $multi, $this->currency);
    }

}


class Franc extends Money
{

    function Franc($amnt, $crncy)
    {
        $this->super($amnt, $crncy);
    }

    function times($multi)
    {
        return new Franc($this->amount * $multi, $this->currency);
    }

}
