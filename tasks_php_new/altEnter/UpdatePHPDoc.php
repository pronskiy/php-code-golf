<?php

/**
 * @param array $params
 *//*caret*/
function changedFunction(array $params, int $index): float
{
    if ($index < 0) {
        throw new Exception($index);
    }
    return $params[$index];
}