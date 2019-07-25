<?php

declare(strict_types=1);

use Doctrine\Common\Collections\ArrayCollection;

class Bug
{
    private int $id;
    private string $description;
    private DateTime $created;
    private string $status;

    private User $engineer;
    private User $reporter;

    private $products;

    public function __construct(string $description, DateTime $created)
    {
        $this->description = $description;
        $this->created = clone $created;
        $this->products = new ArrayCollection();
        $this->status = "OPEN";
    }

    public function assignEngineer(User $engineer): void
    {
        $engineer->assignedToBug($this);
        $this->engineer = $engineer;
    }

    public function assignReporter(User $reporter): void
    {
        $reporter->addReportedBug($this);
        $this->reporter = $reporter;
    }

    public function assignToProduct(Product $p): void
    {
        $this->products[] = $p;
    }

    public function getId(): int
    {
        return $this->id;
    }
}

