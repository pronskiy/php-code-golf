<?php

$json = json_decode(file_get_contents(__DIR__ . '/tasks_java.json'));
$tasks = $json->tasks;

foreach ($tasks as $task) {
    $pathParts = pathinfo($task->fileName);
    $fileName = $task->taskId . '_' . $pathParts['filename'];
//    $extension = $pathParts['extension'];

    $initialCode = $task->initialCode;
    $targetCode = $task->targetCode;

    $codeToWrite = "<?php\n\n" . $initialCode . "\n\n/* ------------------------------ */\n\n" . $targetCode;

    file_put_contents(__DIR__ . '/tasks_php/' . $fileName . '.php', $codeToWrite);
}
