<?php

class Order
{
    /** @var int */
    private $value;

    /** @var DateTimeImmutable */
    private $date;

    /**
     * Order constructor.
     * @param int $value
     * @param DateTimeImmutable $date
     */
    public function __construct(int $value, DateTimeImmutable $date)
    {
        $this->value = $value;
        $this->date = $date;
    }


}