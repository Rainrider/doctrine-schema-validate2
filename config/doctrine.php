<?php

declare(strict_types=1);

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

require_once dirname(__DIR__).'/vendor/autoload.php';

$paths = [dirname(__DIR__).'/src/Entity'];

$dbParams = [
    'dbname' => 'doctrine_test',
    'user' => 'test',
    'password' => 's3cr37',
    'host' => '0.0.0.0',
    'port' => 61949,
    'driver' => 'pdo_mysql',
];

$config = Setup::createAttributeMetadataConfiguration($paths, true);
$entityManager = EntityManager::create($dbParams, $config);
