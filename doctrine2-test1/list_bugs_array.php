<?php

require_once __DIR__ . '/bootstrap.php';

$dql = 'SELECT b, e, r, p
    FROM Bug b
    JOIN b.engineer e
    JOIN b.reporter r
    JOIN b.products p
    ORDER BY b.created DESC';

/** @var \Doctrine\ORM\EntityManager $entityManager */
$query = $entityManager->createQuery($dql);
$query->setMaxResults(30);
$bugs = $query->getArrayResult();

foreach ($bugs as $bug) {
    echo $bug['description']." - ".$bug['created']->format('d.m.Y')."\n";
    echo "    Reported by: ".$bug['reporter']['name']."\n";
    echo "    Assigned to: ".$bug['engineer']['name']."\n";
    foreach ($bug['products'] as $product) {
        echo "    Platform: ".$product['name']."\n";
    }
    echo "\n";
}
