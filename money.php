<?php

class Doller
{

    private $amount;

    function Doller($x)  //�ܤ�amount�Ϥ狼��Ť餤�Τ�x�ˤ���
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

    function Franc($x)  //�ܤ�amount�Ϥ狼��Ť餤�Τ�x�ˤ���
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
