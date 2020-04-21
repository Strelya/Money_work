<?php

require_once '../vendor/autoload.php';

use \App\Currency;
use \App\Money;

$usd = new Currency('USD');//UsD
$eur = new Currency('EUR');

$usd->equals($eur);

$money_usd = new Money(100, $usd);
$money_usd10 = new Money(10, $usd);
$money_eur = new Money(100, $eur);

$money_usd->equals($money_eur);
$money_usd->add($money_usd10);

echo $money_usd->getAmount();