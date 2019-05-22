<?php

$tasks = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

foreach ($tasks as $task) {
    if ($task % 2 == 0) {
        echo $task . "\n";
    }
}
