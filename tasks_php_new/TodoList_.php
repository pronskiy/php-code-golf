<?php

namespace CodeGolfTodo;

class Item
{
    //region Properties
    public string $id;
    public string $description;
    public bool $done = false;
    //endregion

    public function __construct(string $description)
    {
        $this->id = uniqid('', true);
        $this->description = $description;
    }

    public function __toString(): string
    {
        $mark = $this->done ? 'x' : ' ';
        return sprintf("[%s] %s (%s)", $mark, $this->description, $this->id);
    }
}

class TodoList
{
    private $items = [];

    public function add(Item $item)
    {
        $this->items[$item->id] = $item;
    }

    public function print()
    {
        foreach ($this->items as $item) {
            echo $item, "\n";
        }
    }
}
