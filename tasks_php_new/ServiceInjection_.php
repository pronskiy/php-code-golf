<?php
namespace ServiceInjection;

class Controller
{
    /** @var Service */
    private $service;

    /**
     * Controller constructor.
     * @param Service $service
     */
    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function action($order)
    {
        $this->service->process($order);
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
