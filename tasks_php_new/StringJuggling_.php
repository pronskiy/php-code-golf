<?php

$num = '5';
$location = 'tree';
echo sprintf("There are %s monkeys in the %s", $num, $location);

echo "The {$location} contains {$num} monkeys.
That's a nice {$location} full of {$num} monkeys.";
