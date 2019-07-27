<?php
declare(strict_types=1);

require_once __DIR__.'/bootstrap.php';

$dql = "SELECT
        products.id,
        products.name,
        count(bug.id) as openBugs
    FROM Bug bug
    JOIN bug.products products
    WHERE bug.status = 'OPEN'
    GROUP BY products.id
    ";


$products = $entityManager->createQuery($dql)->getScalarResult();

echo "Found products:\n\n";
foreach($products as $p){
    printf(" - Product '%s', has %d open bugs\n",
        $p['name'],
        $p['openBugs']
    );
}

echo PHP_EOL;

