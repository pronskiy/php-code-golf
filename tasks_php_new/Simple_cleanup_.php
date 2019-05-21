<?php

namespace Impl {

    use Some\Very\Long\Name\Element;
    use Some\Very\Long\Name\Entity;

    function handle(): Entity
    {
        return new Element();
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