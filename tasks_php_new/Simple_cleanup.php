<?php

namespace Impl {
    function handle(): \Some\Very\Long\Name\Entity
    {
       return new \Some\Very\Long\\*caret*\Name\Element();
    }
}

namespace Some\Very\Long\Name {
    interface Entity
    {
    }

    class Element implements Entity
    {
    }
}


