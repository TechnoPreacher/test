<?php

require 'vendor/autoload.php';

use nsfin\Exchange;
//использование пространств имён

$Exchange = new Exchange();
echo "If i wanna buy 10 dollars, i should pay ";
echo $Exchange->convert("buy 10 USD");

echo "If i wanna sale 10 dollars, i take ";
echo $Exchange->convert("sale 10 USD");