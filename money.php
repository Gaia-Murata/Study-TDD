<?php

class Money
{
    protected $amount;

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

}

class Doller extends Money
{

    function Doller($x) //本書のamountはわかりづらいのでxにした
    {
        $this->amount = $x;
    }

    function times($multi)
    {
        return new Doller($this->amount * $multi);
    }

    function currency()
    {
        return "USD";
    }
    
}


class Franc extends Money
{

    function Franc($x) //本書のamountはわかりづらいのでxにした
    {
        $this->amount = $x;
    }

    function times($multi)
    {
        return new Franc($this->amount * $multi);
    }

    function currency()
    {
        return "CHF";
    }
}
