<?php

class Order
{
    /** @var int */
    private $id;

    /** @var DateTimeImmutable */
    private $date;

    public function __construct(int $id, DateTimeImmutable $date)
    {
        $this->id = $id;
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return DateTimeImmutable
     */
    public function getDate(): DateTimeImmutable
    {
        return $this->date;
    }
}
