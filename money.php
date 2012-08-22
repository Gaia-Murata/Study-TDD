<?php

class Money
{
    protected $amount;
    protected $currency;

    function equals($obj)
    {
        return $this->amount == $obj->amount
            && get_class($this) == get_class($obj);;
    }

    function doller($x)
    {
        return new Doller($x);
    }

    function franc($x)
    {
        return new Franc($x);
    }

    function currency()
    {
        return $this->currency;
    }

}

class Doller extends Money
{

    function Doller($x) //本書のamountはわかりづらいのでxにした
    {
        $this->amount = $x;
        $this->currency = "USD";
    }

    function times($multi)
    {
        return new Doller($this->amount * $multi);
    }

}


class Franc extends Money
{

    function Franc($x) //本書のamountはわかりづらいのでxにした
    {
        $this->amount = $x;
        $this->currency = "CHF";
    }

    function times($multi)
    {
        return new Franc($this->amount * $multi);
    }

}
