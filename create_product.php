<?php

require_once __DIR__.'/bootstrap.php';

use Ramsey\Uuid\Uuid;

$productName = $argv[1];

$product = new Product(Uuid::uuid4(), $productName);

/** @var \Doctrine\ORM\EntityManager $entityManager */
$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";
