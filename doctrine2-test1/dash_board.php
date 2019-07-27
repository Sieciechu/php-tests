<?php
declare(strict_types=1);

require_once __DIR__.'/bootstrap.php';

$userId = $argv[1];

$bugs = $entityManager->getRepository('Bug')->getUserBugs($userId);

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

