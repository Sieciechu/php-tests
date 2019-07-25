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

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    public function assignEngineer(User $engineer)
    {
        $engineer->assignedToBug($this);
        $this->engineer = $engineer;
    }

    public function assignReporter(User $reporter)
    {
        $reported->addReportedBug($this);
        $this->reporter = $reporter;
    }

    public function assignToProduct(Product $p)
    {
        $this->products[] = $p;
    }
}

