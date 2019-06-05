<?php

class Printer
{
    public function printGreeting(string $name)
    {
        $this->/*caret*/printText("Hello, " . $name);
    }
}