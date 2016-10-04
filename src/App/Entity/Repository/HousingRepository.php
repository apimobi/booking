<?php
namespace App\Entity\Repository;

use Doctrine\ORM\QueryBuilder;
use Doctrine\Common\Collections;
use Doctrine\ORM\EntityRepository;

/**
 * HousingRepository
 */
class HousingRepository extends EntityRepository
{

    /**
     * @return array|void
     */

    public function findAllByIds(array $housingIds)
    {
        $qb = $this->createQueryBuilder('housing')
            ->where('housing.id IN (:ids)')
            ->setParameter('ids', $housingIds);

        return $qb->getQuery()->getResult();
    }

}