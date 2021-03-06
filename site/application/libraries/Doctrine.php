<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use Doctrine\Common\ClassLoader,
    Doctrine\ORM\Configuration,
    Doctrine\ORM\EntityManager,
    Doctrine\Common\Cache\ArrayCache,
    Doctrine\DBAL\Logging\EchoSQLLogger,
    Doctrine\Common\Cache\ApcCache;

class Doctrine {

    public $em = null;
    public $stream = null;

    public function __construct() {
        // in this way, when other apps are using this package
        // they can also rely on this library and free to use Doctrine
        $common_app = BASEPATH . "../application/";
        // load database configuration from CodeIgniter
        require_once $common_app . 'config/database.php';
        // Doctrine will look for:
        // model classes defined in $modelsPath/$entitiesNamespace
        // with namespace Entities
        $modelsPath = $common_app . 'models';
        $entitiesNamespace = "Entities";
        $streamNameSpace = "stream";
        $entitiesClassLoader = new ClassLoader($entitiesNamespace, $modelsPath);
        $entitiesClassLoader->register();
        $entitiesClassLoader = new ClassLoader($streamNameSpace, $modelsPath);
        $entitiesClassLoader->register();
        // default models, when defining the model, make sure you specific
        // the namespace for it: namespace models;
        // Doctrine will look for:
        // model classes defined in $common_app/models
        // with namespace models
        $defaultEntitiesClassLoader = new ClassLoader('models', rtrim($common_app, "/"));
        $defaultEntitiesClassLoader->register();

        $proxiesClassLoader = new ClassLoader('Proxies', $common_app . 'models/Proxies');
        $proxiesClassLoader->register();
        $config = new Configuration;
        $driverImpl = $config->newDefaultAnnotationDriver(array($common_app . 'models'));
        $config->setMetadataDriverImpl($driverImpl);
        // Proxy configuration
        $config->setProxyDir($common_app . '/models/Proxies');
        $config->setProxyNamespace('Proxies');
        // please refer to http://doctrine-orm.readthedocs.org/en/latest/reference/caching.html?highlight=apc%20cache
        // In order to use the APC cache driver you must have it compiled and enabled in your php.ini.
        // other alternatives are Memcache, Memcached, Xcache, Redis, etc.
        /* if(ENVIRONMENT == 'development') */
        /*   $cache = new ArrayCache; */
        /* else */
        /*   $cache = new ApcCache; */
        /* $config->setMetadataCacheImpl($cache); */
        /* $config->setQueryCacheImpl($cache); */
        // Logger, uncomment these two lines when debugging
        /* $logger = new EchoSQLLogger; */
        /* $config->setSQLLogger($logger); */
        $config->setAutoGenerateProxyClasses(ENVIRONMENT == 'development');
        // Database connection information
//        $connectionOptions = array(
//            'driver' => 'pdo_mysql',
//            'user' => $db['default']['username'],
//            'password' => $db['default']['password'],
//            'host' => $db['default']['hostname'],
//            'dbname' => $db['default']['database'],
//            'charset' => $db['default']['char_set'],
//            'driverOptions' =>
//            array('charset' => $db['default']['char_set']));
        
//        $db['default']['hostname'] = '127.0.0.1';
//
//$db['default']['username'] = 'stream';
//
//$db['default']['password'] = '9t75xgqu';
//
//$db['default']['database'] = 'kpfiles_bdstreams';

        $streamConectionOptions = array(
            'driver' => 'pdo_mysql',
            'user' => "root",
            'password' =>"Observum@8102",
            'host' => "127.0.0.1",
            'dbname' => "kpfiles_bdstreams",
            'charset' => $db['default']['char_set'],
            'driverOptions' =>
            array('charset' => $db['tienda']['char_set']));
       
       

        // Create EntityManager
        //$this->em = EntityManager::create($connectionOptions, $config);
        $this->stream = EntityManager::create($streamConectionOptions, $config);
    }

}
