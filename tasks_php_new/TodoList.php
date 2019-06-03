<?php

namespace CodeGolfTodo;

class Item/*caret*/
{
    public string $id;
    public string $title;
    public bool $done = false;

    public function __construct(string $title)
    {
        $this->id = uniqid('', true);
        $this->title = $title;
    }

    public function __toString(): string
    {
        return "[" . ($this->done ? 'x' : ' ') . "] " . $this->title . " (" . $this->id . ")";
    }
}

class TodoList
{
    private $items = array();
}
