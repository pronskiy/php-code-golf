<?php

$json = json_decode(file_get_contents(__DIR__ . '/phpTasks.json'));

foreach ($json->tasks as &$task) {
    $pathParts = pathinfo($task->fileName);

    $initialFilename = $task->fileName;
    $targetFilename = sprintf("%s_.%s", $pathParts['filename'], $pathParts['extension']);

    $initialCode = file_get_contents(__DIR__ . '/tasks_php_new/' . $initialFilename);
    $targetCode = file_get_contents(__DIR__ . '/tasks_php_new/' . $targetFilename);

    $task->initialCode = $initialCode;
    $task->targetCode = $targetCode;
}

file_put_contents(__DIR__ . '/phpTasks_.json' , json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
