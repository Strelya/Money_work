<?php

namespace App;

class Money
{
    private $amount;
    private $currency;

    public function __construct($amount, Currency $currency)
    {
        $this->setAmount($amount);
        $this->setCurrency($currency);
    }

    private function setAmount($amount)
    {
        $this->amount = (int)$amount;
    }

    private function setCurrency(Currency $currency)
    {
        $this->currency = $currency;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function equalsMoney(Money $money)
    {
//        if ()
//
        return
            $money->currency->equals($this->getCurrency()) &&//вызывается с карренчи, убрать!!!
            $money->getAmount() === $this->getAmount();
//
    }


}