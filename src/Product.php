<?php

class Product
{
    /** @var int */
    private int $id;

    /** @var string */
    private string $name;

    public function __construct(string $productName) {
        $this->name = $productName;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}
