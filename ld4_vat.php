<?php

//The VAT rate.
$vat = 0.15;


$vatDivisor = 1 + ($vat / 100);


$price = 80;


$priceBeforeVat = $price / $vatDivisor;

$vatAmount = $price - $priceBeforeVat;

echo number_format($priceBeforeVat, 2), '<br>';

echo 'VAT @ ' . $vat . '% - ' . number_format($vatAmount, 2), '<br>';

echo $price;