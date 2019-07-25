<?php

declare(strict_types=1);

use Ramsey\Uuid\UuidInterface;

class Product
{
    private UuidInterface $id;

    private string $name;

    public function __construct(UuidInterface $uuid, string $productName) {
        $this->name = $productName;
        $this->id = $uuid;
    }

    public function getId(): UuidInterface
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $newName): void
    {
        $this->name = $newName;
    }
}

