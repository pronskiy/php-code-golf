<?php

$positionMarker = '/*caret*/';
$positionMarkerPattern = '/\/\*caret\*\//';

$json = json_decode(file_get_contents(__DIR__ . '/phpTasks.json'));

foreach ($json->tasks as &$task) {
    ['filename' => $filename, 'extension' => $extension] = pathinfo($task->fileName);

    $initialFilename = $task->fileName;
    $targetFilename = sprintf("%s_.%s", $filename, $extension);

    $tasksDir = __DIR__ . '/tasks_php_new/';
    $initialCode = trim(file_get_contents($tasksDir . $initialFilename));
    $targetCode = trim(file_get_contents($tasksDir . $targetFilename));

    $initialOffset = strpos($initialCode, $positionMarker);
    $initialCode = preg_replace($positionMarkerPattern, '', $initialCode, 1);

    $task->initialCode = $initialCode;
    $task->targetCode = $targetCode;
    $task->initialOffset = $initialOffset;
}

file_put_contents(__DIR__ . '/phpTasks_.json' , json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
