<?php
declare(strict_types=1);

require_once __DIR__.'/bootstrap.php';

$userId = $argv[1];

$dql = "SELECT b, e, r 
    FROM Bug b
    JOIN b.engineer e
    JOIN b.reporter r
    WHERE
        (e.id = ?1 OR r.id = ?1)
        AND b.status='OPEN'
    ORDER BY b.created DESC";


$bugs = $entityManager->createQuery($dql)
    ->setParameter('1', $userId)
    ->setMaxResults(15)
    ->getResult();

echo "Found bugs:\n\n";
foreach($bugs as $bug){
    printf(" - Bug '%s', created at %s, Engineer: %s, Reported: %s\n",
        $bug->getDescription(),
        $bug->getCreated()->format('Y-m-d H:i:s'),
        $bug->getEngineer()->getName(),
        $bug->getReporter()->getName()
    );
}
echo PHP_EOL;

