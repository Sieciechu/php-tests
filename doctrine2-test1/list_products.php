<?php

declare(strict_types=1);

require_once __DIR__.'/bootstrap.php';

$productsRepository = $entityManager->getRepository('Product');

$products = $productsRepository->findAll();

foreach($products as $product){
    echo sprintf(" -%s:    %s\n", $product->getId(), $product->getName());
}

