<?php

/**
 * @param array $params
 * @param int $index
 * @return float
 * @throws Exception
 */
function changedFunction(array $params, int $index): float
{
    if ($index < 0) {
        throw new Exception($index);
    }
    return $params[$index];
}