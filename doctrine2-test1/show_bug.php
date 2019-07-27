<?php
declare(strict_types=1);

require_once __DIR__.'/bootstrap.php';

$bugId = $argv[1];
$bug = $entityManager->find('Bug', $bugId);

if(null === $bug) {
    echo "There is no bug of ID '$bug'".PHP_EOL;
    exit;
}

echo "Found bug:".PHP_EOL;
echo "Bug " . $bug->getDescription() . PHP_EOL;
echo "Engineer: " . $bug->getEngineer()->getName() . PHP_EOL;


