<?php

use Ramsey\Uuid\Uuid;

declare(strict_types=1);

require_once __DIR__.'/bootstrap.php';

$productName = $argv[1];

$product = new Product(Uuid::uuid4(), $productName);

/** @var \Doctrine\ORM\EntityManager $entityManager */
$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";

