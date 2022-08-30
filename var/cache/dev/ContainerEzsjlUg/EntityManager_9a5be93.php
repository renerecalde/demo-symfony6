<?php

namespace ContainerEzsjlUg;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldered8fb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4eb74 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc9dee = [
        
    ];

    public function getConnection()
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'getConnection', array(), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'getMetadataFactory', array(), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'getExpressionBuilder', array(), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'beginTransaction', array(), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'getCache', array(), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'transactional', array('func' => $func), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'commit', array(), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->commit();
    }

    public function rollback()
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'rollback', array(), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'getClassMetadata', array('className' => $className), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'createQuery', array('dql' => $dql), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'createNamedQuery', array('name' => $name), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'createQueryBuilder', array(), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'flush', array('entity' => $entity), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'clear', array('entityName' => $entityName), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->clear($entityName);
    }

    public function close()
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'close', array(), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->close();
    }

    public function persist($entity)
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'persist', array('entity' => $entity), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'remove', array('entity' => $entity), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'refresh', array('entity' => $entity), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'detach', array('entity' => $entity), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'merge', array('entity' => $entity), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'contains', array('entity' => $entity), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'getEventManager', array(), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'getConfiguration', array(), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'isOpen', array(), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'getUnitOfWork', array(), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'getProxyFactory', array(), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'initializeObject', array('obj' => $obj), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'getFilters', array(), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'isFiltersStateClean', array(), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'hasFilters', array(), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return $this->valueHoldered8fb->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer4eb74 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldered8fb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldered8fb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldered8fb->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, '__get', ['name' => $name], $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        if (isset(self::$publicPropertiesc9dee[$name])) {
            return $this->valueHoldered8fb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldered8fb;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldered8fb;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldered8fb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldered8fb;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, '__isset', array('name' => $name), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldered8fb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldered8fb;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, '__unset', array('name' => $name), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldered8fb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldered8fb;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, '__clone', array(), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        $this->valueHoldered8fb = clone $this->valueHoldered8fb;
    }

    public function __sleep()
    {
        $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, '__sleep', array(), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;

        return array('valueHoldered8fb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4eb74 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4eb74;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4eb74 && ($this->initializer4eb74->__invoke($valueHoldered8fb, $this, 'initializeProxy', array(), $this->initializer4eb74) || 1) && $this->valueHoldered8fb = $valueHoldered8fb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldered8fb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldered8fb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
