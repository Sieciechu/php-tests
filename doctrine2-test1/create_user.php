<?php

declare(strict_types=1);

use Ramsey\Uuid\Uuid;

require_once __DIR__.'/bootstrap.php';

$userName = $argv[1];

$user = new User($userName);

/** @var \Doctrine\ORM\EntityManager $entityManager */
$entityManager->persist($user);
$entityManager->flush();

echo "Created new user with ID: " . $user->getId() . PHP_EOL;

