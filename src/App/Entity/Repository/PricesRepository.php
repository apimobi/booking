<?php
namespace App\Entity\Repository;

use Doctrine\ORM\QueryBuilder;
use Doctrine\Common\Collections;
use Doctrine\ORM\EntityRepository;

/**
 * PricesRepository
 */
class PricesRepository extends EntityRepository
{

    /**
     * Search Prices by housing id and date
     *
     * @param  Housing  $housingId
     * @param  DateTime $dateIn
     * @param  DateTime $dateOut
     *
     * @return array
     */
    public function getPrices(array $housingIds,  \DateTime $dateIn, \DateTime $dateOut)
    {

        $qb = $this->createQueryBuilder('prices')
                   ->where('prices.housingId IN (:ids)')
                   ->andWhere('prices.dateStart < :dateIn AND prices.dateEnd > :dateIn')
                   ->orWhere('(prices.dateStart >= :dateIn AND prices.dateEnd <= :dateOut)')
                   ->orWhere('(prices.dateStart > :dateIn AND prices.dateStart <= :dateOut AND prices.dateEnd > :dateOut)')
                   ->setParameter('dateIn', $dateIn)
                   ->setParameter('dateOut', $dateOut)
                   ->setParameter('ids', $housingIds);

        return $qb->getQuery()->getResult();
    }


}
