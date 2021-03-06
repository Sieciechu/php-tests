<?php

declare(strict_types=1);

use Ramsey\Uuid\Uuid;

require_once __DIR__.'/bootstrap.php';

$productName = $argv[1];

$product = new Product(Uuid::uuid4(), $productName);

/** @var \Doctrine\ORM\EntityManager $entityManager */
$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";

