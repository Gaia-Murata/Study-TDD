<?php

class Doller
{

    private $amount;

    function Doller($x)  //本のamountはわかりづらいのでxにした
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


class Franc
{

    private $amount;

    function Franc($x)  //本のamountはわかりづらいのでxにした
    {
        $this->amount = $x;
    }

    function times($multi)
    {
        return new Franc($this->amount * $multi);
    }

    function equals($obj)
    {
        return $this->amount == $obj->amount;
    }

}
