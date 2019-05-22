<?php

$size = getSizeOfBasket();
$title = $size . " inside";
$description = "There are " . $size . "in your basket";
$promo = "You have " . $size . " in your basket. 
    Buy 1 more and get 10% discount!";

function getSizeOfBasket()
{
    return sizeof(array("Chips", "Juice", "Ice-cream"));
}