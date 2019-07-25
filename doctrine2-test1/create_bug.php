<?php

declare(strict_types=1);

use Ramsey\Uuid\Uuid;

require_once __DIR__.'/bootstrap.php';

$reporterId = $argv[1];
$engineerId = $argv[2];
$productsIds = explode(',', $argv[3]);

$reporter = $entityManager->find('User', $reporterId);
$engineer = $entityManager->find('User', $engineerId);

if (!$reporter || !$engineer) {
    echo "No reporter and/or engineer found for the given id(s).".PHP_EOL;
    exit(1);
}

$bug = new Bug(
    "Something does not work",
    new DateTime()
);
$bug->assignEngineer($engineer);
$bug->assignReporter($reporter);

foreach($productsIds as $productId) {
    $product = $entityManager->find('Product', Uuid::fromString($productId));
    if (null === $product) {
        echo "There is no product of id '$productId]'";
        continue;
    }

    $bug->assignToProduct($product);
}


/** @var \Doctrine\ORM\EntityManager $entityManager */
$entityManager->persist($bug);
$entityManager->flush();

echo "Your new Bug Id: ".$bug->getId()."\n";

