<?php
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Cache\FilesystemCache;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\ORM\Tools\Setup;
use Slim\Container;
require __DIR__ . '/../vendor/autoload.php';

$container = new Container(require __DIR__ . '/../config/database.php');
$container[EntityManager::class] = function (Container $container): EntityManager {
    $config = Setup::createAnnotationMetadataConfiguration(
        $container['doctrine']['metadata_dirs'],
        $container['doctrine']['dev_mode']
    );

    $config->setMetadataDriverImpl(
        new AnnotationDriver(
            new AnnotationReader,
            $container['doctrine']['metadata_dirs']
        )
    );

    $config->setMetadataCacheImpl(
        new FilesystemCache(
            $container['doctrine']['cache_dir']
        )
    );

    return EntityManager::create(
        $container['doctrine']['connection'],
        $config
    );
};

return $container;