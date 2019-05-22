<?php

class Printer
{
    public function printGreeting(string $name)
    {
        $this->printText("Hello, " . $name);
    }

    private function printText(string $string)
    {
        echo $string;
    }
}