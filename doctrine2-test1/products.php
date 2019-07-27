<?php
declare(strict_types=1);

require_once __DIR__.'/bootstrap.php';

$products = $entityManager->getRepository('Bug')->getOpenBugsByProduct();

echo "Found products:\n\n";
foreach($products as $p){
    printf(" - Product '%s', has %d open bugs\n",
        $p['name'],
        $p['openBugs']
    );
}

echo PHP_EOL;

