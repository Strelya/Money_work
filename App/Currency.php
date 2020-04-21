<?php

namespace App;

final class Currency
{

    private $isoCode;

    public function __construct($isoCode)
    {
        $this->setIsoCode($isoCode);
    }

    private function setIsoCode($isoCode)
    {
        if (!preg_match('/^[A-Z]{3}$/', $isoCode)) {
            throw new \InvalidArgumentException('Invalid format Currency');
        }
        $this->isoCode = $isoCode;
    }

    public function getIsoCode()
    {
        return $this->isoCode;
    }

    public function equals(Currency $currency)
    {
        if ($this->isoCode === $currency->getIsoCode()) {
            return true;
        }
        return false;
    }
}