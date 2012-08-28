<?php

interface Expression
{
    public function plus($add);
}


class Bank
{
    public function reduce($source, $currency)
    {
        if( $source instanceof Money){
            return $source;
        }
        return $source->reduce($currency);
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
}


