<?php

$positionMarker = '/**/';
$positionMarkerPattern = '/\/\*\*\//';

$json = json_decode(file_get_contents(__DIR__ . '/phpTasks.json'));

foreach ($json->tasks as &$task) {
    $pathParts = pathinfo($task->fileName);

    $initialFilename = $task->fileName;
    $targetFilename = sprintf("%s_.%s", $pathParts['filename'], $pathParts['extension']);

    $initialCode = trim(file_get_contents(__DIR__ . '/tasks_php_new/' . $initialFilename));
    $targetCode = trim(file_get_contents(__DIR__ . '/tasks_php_new/' . $targetFilename));

    $initialOffset = strpos($initialCode, $positionMarker);
    $initialCode = preg_replace($positionMarkerPattern, '', $initialCode, 1);

    $task->initialCode = $initialCode;
    $task->targetCode = $targetCode;
    $task->initialOffset = $initialOffset;
}

file_put_contents(__DIR__ . '/phpTasks_.json' , json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
