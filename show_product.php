<?php
declare(strict_types=1);

use Ramsey\Uuid\Uuid;

require_once __DIR__.'/bootstrap.php';

$productsRepository = $entityManager->getRepository('Product');

$productId = Uuid::fromString($argv[1]);
$product = $productsRepository->find($productId);

if(null === $product) {
    echo "There is no product of ID '$productId'".PHP_EOL;
    exit;
}

echo "Found product:".PHP_EOL;
echo sprintf(" -%s:    %s\n", $product->getId(), $product->getName());

