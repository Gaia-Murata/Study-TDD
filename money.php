<?php

interface Expression
{
    public function plus($add);
    public function reduce($currency);
}


class Bank
{
    public function reduce($source, $currency)
    {
        return $source->reduce($currency);
    }

    public function addrate()
    {

    }
}


class Sum implements Expression
{
    public $augend;
    public $addend;

    function __construct($aug, $add)
    {
        $this->augend = $aug;
        $this->addend = $add;
    }

    function plus($add)
    {

    }

    function reduce($currency)
    {
        $new_amount = $this->augend->amount + $this->addend->amount;
        return new Money($new_amount, $currency);
    }

}


class Money implements Expression
{
    public $amount;
    public $currency;

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

    function plus($add)
    {
        return new Sum($this, $add);
    }

    function reduce($crncy)
    {
        $rate = ($this->currency === "CHF" && $crncy === "USD") ? 2 : 1 ;
        return new Money($this->amount/$rate, $crncy);
    }
}


