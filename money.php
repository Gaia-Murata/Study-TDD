<?php

class Doller
{

    private $amount;

    function Doller($x)
    {
        $this->amount = $x;
    }

    function times($multi)
    {
        return new Doller($this->amount * $multi);
    }

    function equals($obj)
    {
        return $this->amount == $obj->amount;
    }

}
