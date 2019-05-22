<?php

$description = "There are " .
    /*caret*/(getSizeOfBasket() == 0 ? "No goods" : getSizeOfBasket() . " goods") .
    "in your basket";
$promo = "You have " .
    (getSizeOfBasket() == 0 ? "No goods" : getSizeOfBasket() . " goods") .
    " in your basket. Buy 1 more and get 10% discount!";

function getSizeOfBasket()
{
    return sizeof(array("Chips", "Juice", "Ice-cream"));
}