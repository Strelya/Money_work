<?php

namespace App;

class Money
{
    private $amount;
    private $currency;

    public function __construct(float $amount, Currency $currency)
    {
        if ($amount < 0) {
            throw new InvalidArgumentException('Your amount must be 0 or higher');
        }
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }
    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    private function setAmount(float $amount)
    {
        $this->amount = $amount;
    }
    private function setCurrency(Currency $currency)
    {
        $this->currency = $currency;
    }

    public function equals(self $money): bool
    {
        return
            $money->currency->equals($this->getCurrency()) &&
            $money->getAmount() === $this->getAmount();
    }

    public function add(Money $money): float
    {
        return $this->amount += $money->getAmount();
    }
}