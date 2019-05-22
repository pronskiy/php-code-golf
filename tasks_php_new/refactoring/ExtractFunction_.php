<?php

/**
 * @return string
 */
function getGoodsDescription(): string
{
    return (getSizeOfBasket() == 0 ? "No goods" : getSizeOfBasket() . " goods");
}

$description = "There are " .
    getGoodsDescription() .
    "in your basket";
$promo = "You have " .
    getGoodsDescription() .
    " in your basket. Buy 1 more and get 10% discount!";

function getSizeOfBasket()
{
    return sizeof(array("Chips", "Juice", "Ice-cream"));
}