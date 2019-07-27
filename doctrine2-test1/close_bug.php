<?php
declare(strict_types=1);

require_once __DIR__.'/bootstrap.php';

$bugId = $argv[1];

$bug = $entityManager->find('Bug', (int)$bugId);
if (null === $bug) {
    echo "There is no bug of id '" . $bugId . "'\n";
    exit;
}

$bug->close();
$entityManager->flush();

printf("Bug %s closed\n", $bugId);

echo PHP_EOL;

