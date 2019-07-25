<?php

declare(strict_types=1);

use Doctrine\Common\Collections\ArrayCollection;

class User
{
    private $id;
    private string $name;

    private $reportedBugs;

    private $assignedBugs;

    public function __construct(string $name)
    {
        $this->reportedBugs = new ArrayCollection();
        $this->assignedBugs = new ArrayCollection();
        $this->name = $name;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function addReportedBug(Bug $bug): void
    {
        $this->reportedBugs[] = $bug;
    }

    public function assignedToBug(Bug $bug): void
    {
        $this->assignedBugs[] = $bug;
    }
}

