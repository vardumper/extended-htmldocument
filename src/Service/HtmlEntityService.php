<?php

declare(strict_types=1);

namespace Html\Service;

use DOM\ORM\Entity\EntityInterface;
use DOM\ORM\Repository\EntityRepository;
use DOM\ORM\Traits\EntityManagerTrait;

/**
 * Service for persisting HTML5 element entities to XML storage via DOM-ORM.
 *
 * Requires a dom-orm.php config file in your project root. Example:
 *
 *   <?php
 *   return [
 *       'dom-orm' => [
 *           'flysystem' => [
 *               'adapter' => \League\Flysystem\Local\LocalFilesystemAdapter::class,
 *               'config'  => [__DIR__ . '/storage'],
 *           ],
 *           'filename' => 'html-entities.xml',
 *       ],
 *   ];
 *
 * Usage:
 *
 *   $service = new HtmlEntityService();
 *   $service->init();
 *   $id = $service->persistEntity(new \Html\Entity\Block\DivEntity(class: 'my-div'));
 *
 * @see https://vardumper.github.io/dom-orm/get-started/
 */
class HtmlEntityService
{
    use EntityManagerTrait;

    /**
     * Persist an HTML5 element entity to the configured XML storage.
     *
     * @return string The entity ID assigned by DOM-ORM.
     */
    public function persistEntity(EntityInterface $entity): string
    {
        $this->persist($entity);

        return $entity->getId();
    }

    /**
     * Find a single HTML5 element entity by class and ID.
     *
     * @param class-string<EntityInterface> $entityClass
     */
    public function findEntity(string $entityClass, string $id): ?EntityInterface
    {
        $result = (new EntityRepository($entityClass))->find($id);

        return $result instanceof EntityInterface ? $result : null;
    }

    /**
     * Find all persisted entities of a given HTML5 element entity class.
     *
     * @param class-string<EntityInterface> $entityClass
     * @return array<EntityInterface>
     */
    public function findAllEntities(string $entityClass): array
    {
        $collection = (new EntityRepository($entityClass))->findAll();

        return $collection !== null ? $collection->toArray() : [];
    }

    /**
     * Remove a persisted entity by class and ID.
     *
     * @param class-string<EntityInterface> $entityClass
     */
    public function removeEntity(string $entityClass, string $id): void
    {
        (new EntityRepository($entityClass))->remove($id);
    }
}
