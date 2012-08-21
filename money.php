<?php

class Money
{
    protected $amount;

    function equals($obj)
    {
        return $this->amount == $obj->amount;
    }

}

class Doller extends Money
{

    function Doller($x)  //本のamountはわかりづらいのでxにした
    {
        $this->amount = $x;
    }

    function times($multi)
    {
        return new Doller($this->amount * $multi);
    }

}


class Franc extends Money
{

    function Franc($x)  //本のamountはわかりづらいのでxにした
    {
        $this->amount = $x;
    }

    function times($multi)
    {
        return new Franc($this->amount * $multi);
    }

/*     function equals($obj) */
/*     { */
/*         return $this->amount == $obj->amount; */
/*     } */

}
