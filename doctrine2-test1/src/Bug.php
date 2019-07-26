<?php

declare(strict_types=1);

use Doctrine\Common\Collections\ArrayCollection;

class Bug
{
    /** @var ?int $id */
    private $id;
    private string $description;
    private DateTime $created;
    private string $status;

    /** @var ?User */
    private $engineer;

    /** @var ?User */
    private $reporter;

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

    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return DateTime
     */
    public function getCreated(): DateTime
    {
        return $this->created;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return User
     */
    public function getEngineer(): User
    {
        return $this->engineer;
    }

    /**
     * @return User
     */
    public function getReporter(): User
    {
        return $this->reporter;
    }

    /**
     * @return Iterable
     */
    public function getProducts()
    {
        return $this->products;
    }
}

