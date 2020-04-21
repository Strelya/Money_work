<?php

require_once '../vendor/autoload.php';

use \App\Currency;
use \App\Money;

$usd = new Currency('USD');//UsD
$eur = new Currency('EUR');

$usd->equals($eur);

$money_usd = new Money(100, $usd);
//$money_eur = new Money(100, $usd);
$money_eur = new Money(100, $eur);
$money_eur = new Money(100, $eur);

$money_usd->equals($money_eur);
$money1->add($money2);

echo $money1->getAmount();