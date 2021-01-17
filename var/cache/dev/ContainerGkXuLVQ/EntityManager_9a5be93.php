<?php

namespace ContainerGkXuLVQ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder93a29 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer536d8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties96a9c = [
        
    ];

    public function getConnection()
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'getConnection', array(), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'getMetadataFactory', array(), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'getExpressionBuilder', array(), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'beginTransaction', array(), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'getCache', array(), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->getCache();
    }

    public function transactional($func)
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'transactional', array('func' => $func), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->transactional($func);
    }

    public function commit()
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'commit', array(), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->commit();
    }

    public function rollback()
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'rollback', array(), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'getClassMetadata', array('className' => $className), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'createQuery', array('dql' => $dql), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'createNamedQuery', array('name' => $name), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'createQueryBuilder', array(), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'flush', array('entity' => $entity), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'clear', array('entityName' => $entityName), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->clear($entityName);
    }

    public function close()
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'close', array(), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->close();
    }

    public function persist($entity)
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'persist', array('entity' => $entity), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'remove', array('entity' => $entity), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'refresh', array('entity' => $entity), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'detach', array('entity' => $entity), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'merge', array('entity' => $entity), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'getRepository', array('entityName' => $entityName), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'contains', array('entity' => $entity), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'getEventManager', array(), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'getConfiguration', array(), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'isOpen', array(), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'getUnitOfWork', array(), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'getProxyFactory', array(), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'initializeObject', array('obj' => $obj), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'getFilters', array(), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'isFiltersStateClean', array(), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'hasFilters', array(), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return $this->valueHolder93a29->hasFilters();
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

        $instance->initializer536d8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder93a29) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder93a29 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder93a29->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, '__get', ['name' => $name], $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        if (isset(self::$publicProperties96a9c[$name])) {
            return $this->valueHolder93a29->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder93a29;

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

        $targetObject = $this->valueHolder93a29;
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
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder93a29;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder93a29;
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
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, '__isset', array('name' => $name), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder93a29;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder93a29;
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
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, '__unset', array('name' => $name), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder93a29;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder93a29;
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
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, '__clone', array(), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        $this->valueHolder93a29 = clone $this->valueHolder93a29;
    }

    public function __sleep()
    {
        $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, '__sleep', array(), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;

        return array('valueHolder93a29');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer536d8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer536d8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer536d8 && ($this->initializer536d8->__invoke($valueHolder93a29, $this, 'initializeProxy', array(), $this->initializer536d8) || 1) && $this->valueHolder93a29 = $valueHolder93a29;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder93a29;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder93a29;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
