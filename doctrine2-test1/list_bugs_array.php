<?php

require_once __DIR__ . '/bootstrap.php';

/** @var \Doctrine\ORM\EntityManager $entityManager */
$bugs = $entityManager->getRepository('Bug')->getRecentBugsArray();

foreach ($bugs as $bug) {
    echo $bug['description']." - ".$bug['created']->format('d.m.Y')."\n";
    echo "    Reported by: ".$bug['reporter']['name']."\n";
    echo "    Assigned to: ".$bug['engineer']['name']."\n";
    foreach ($bug['products'] as $product) {
        echo "    Platform: ".$product['name']."\n";
    }
    echo "\n";
}

