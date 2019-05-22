<?php

class Base
{
    public function getName()
    {
        return "Base";
    }

    public function getParentClass()
    {
        return null;
    }
}

class Child extends Base
{
    /*caret*/
}