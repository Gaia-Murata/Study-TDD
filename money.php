<?php

class Money
{
    protected $amount;

    function equals($obj)
    {
        return $this->amount == $obj->amount
            && get_class($this) == get_class($obj);;
    }

}

class Doller extends Money
{

    function Doller($x)  //�ܤ�amount�Ϥ狼��Ť餤�Τ�x�ˤ���
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

    function Franc($x)  //�ܤ�amount�Ϥ狼��Ť餤�Τ�x�ˤ���
    {
        $this->amount = $x;
    }

    function times($multi)
    {
        return new Franc($this->amount * $multi);
    }

}
