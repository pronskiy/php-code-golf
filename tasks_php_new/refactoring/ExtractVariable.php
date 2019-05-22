<?php

$title = /*caret*/getSizeOfBasket() . " inside";
$description = "There are " . getSizeOfBasket() . "in your basket";
$promo = "You have " . getSizeOfBasket() . " in your basket. 
    Buy 1 more and get 10% discount!";

function getSizeOfBasket()
{
    return sizeof(array("Chips", "Juice", "Ice-cream"));
}