<?php
namespace ServiceInjection;

class Controller
{
    /**
     * Controller constructor.
     */
    public function __construct()
    {
    }

    public function action()
    {
        $servi/*caret*/ce->process($order);
    }
}

class Service
{
    public function process(Order $order)
    {
        // =^_^= \\
    }
}

class Order {}

