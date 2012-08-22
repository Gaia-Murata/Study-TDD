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

    function super($amnt, $crncy) //本書のamountはわかりづらいのでamntにした
    {
        $this->amount = $amnt;
        $this->currency = $crncy;
    }

}

class Doller extends Money
{

    function Doller($amnt, $crncy) //本書のamountはわかりづらいのでamntにした
    {
        $this->super($amnt, $crncy);
    }

    function times($multi)
    {
        $money = new Money;
        return $money->doller($this->amount * $multi);
    }

}


class Franc extends Money
{

    function Franc($amnt, $crncy) //本書のamountはわかりづらいのでamntにした
    {
        $this->super($amnt, $crncy);
    }

    function times($multi)
    {
        $money = new Money;
        return $money->franc($this->amount * $multi);
    }

}
