<?php
declare(strict_types=1);

namespace Tests\EoneoPay\Externals\Stubs\Vendor\Doctrine\ORM;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\Query\ResultSetMapping;
use Tests\EoneoPay\Externals\Stubs\ORM\Entities\EntityStub;

/**
 * @SuppressWarnings(PHPMD.TooManyMethods) This class is implemented from a Doctrine interface
 * @SuppressWarnings(PHPMD.TooManyPublicMethods) This class is implemented from a Doctrine interface
 */
class EntityManagerStub implements EntityManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public function beginTransaction(): void
    {
    }

    /**
     * {@inheritdoc}
     */
    public function clear($objectName = null): void
    {
    }

    /**
     * {@inheritdoc}
     */
    public function close(): void
    {
    }

    /**
     * {@inheritdoc}
     */
    public function commit(): void
    {
    }

    /**
     * {@inheritdoc}
     */
    public function contains($object)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function copy($entity, $deep = null)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function createNamedNativeQuery($name)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function createNamedQuery($name)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function createNativeQuery($sql, ResultSetMapping $rsm)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function createQuery($dql = null)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function createQueryBuilder()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function detach($object): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * @SuppressWarnings(PHPMD.ShortVariable) Parameter is inherited from interface
     */
    public function find($className, $id)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function flush(): void
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getCache()
    {
    }

    /**
     * @param mixed $className
     *
     * @return \Doctrine\ORM\Mapping\ClassMetadata
     */
    public function getClassMetadata($className): ClassMetadata
    {
        return new ClassMetadata($className ?? EntityStub::class);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfiguration()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getConnection()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getEventManager()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getExpressionBuilder()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
    }

    /**
     * {@inheritdoc}
     *
     * @deprecated
     */
    public function getHydrator($hydrationMode)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getMetadataFactory()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getPartialReference($entityName, $identifier)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getProxyFactory()
    {
    }

    /**
     * {@inheritdoc}
     *
     * @SuppressWarnings(PHPMD.ShortVariable) Parameter is inherited from interface
     */
    public function getReference($entityName, $id)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getRepository($className)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getUnitOfWork()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function hasFilters()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function initializeObject($obj): void
    {
    }

    /**
     * {@inheritdoc}
     */
    public function isFiltersStateClean()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function isOpen()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function lock($entity, $lockMode, $lockVersion = null): void
    {
    }

    /**
     * {@inheritdoc}
     */
    public function merge($object)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function newHydrator($hydrationMode)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function persist($object): void
    {
    }

    /**
     * {@inheritdoc}
     */
    public function refresh($object): void
    {
    }

    /**
     * {@inheritdoc}
     */
    public function remove($object): void
    {
    }

    /**
     * {@inheritdoc}
     */
    public function rollback(): void
    {
    }

    /**
     * {@inheritdoc}
     */
    public function transactional($func)
    {
    }
}
