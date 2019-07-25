<?php
declare(strict_types=1);

use \Doctrine\ORM\Tools\Setup;
use \Doctrine\ORM\EntityManager;

require_once 'vendor/autoload.php';

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createXMLMetadataConfiguration([__DIR__.'/config'], $isDevMode);

$conn = [
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/db.sqlite',
];

$entityManager = EntityManager::create($conn, $config);

\Doctrine\DBAL\Types\Type::addType('uuid', 'Ramsey\Uuid\Doctrine\UuidType');

