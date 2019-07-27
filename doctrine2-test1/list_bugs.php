<?php

require_once __DIR__ . '/bootstrap.php';

$dql = 'SELECT b, e, r
    FROM Bug b
    JOIN b.engineer e
    JOIN b.reporter r
    ORDER BY b.created DESC';

/** @var \Doctrine\ORM\EntityManager $entityManager */
$query = $entityManager->createQuery($dql);
$query->setMaxResults(30);
$bugs = $query->getResult();

foreach ($bugs as $bug) {
    /** @var Bug $bug */
    echo $bug->getDescription()." - ".$bug->getCreated()->format('d.m.Y')."\n";
    echo "    Reported by: ".$bug->getReporter()->getName()."\n";
    echo "    Assigned to: ".$bug->getEngineer()->getName()."\n";
    foreach ($bug->getProducts() as $product) {
        echo "    Platform: ".$product->getName()."\n";
    }
    echo "\n";
}
