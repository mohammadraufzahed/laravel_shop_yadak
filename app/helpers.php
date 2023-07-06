<?php

function formatPrice(int $price): string
{
    $price = preg_replace('/[^0-9]/', "", strval($price));
    if (empty($price) || !is_numeric($price))
        throw new Exception('price is not valid');
    return number_format($price);
}
