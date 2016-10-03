<?php
namespace App\Entity\Repository;

use Doctrine\ORM\QueryBuilder;
use Doctrine\Common\Collections;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Config\Definition\Exception\Exception;

/**
 * ReservationRepository
 */
class ReservationRepository extends EntityRepository
{

    /**
     * Search by date reservations
     *
     * @param  DateTime $dateIn
     * @param  DateTime $dateOut
     *
     * @return array
     */
    public function searchByDate(array $housingIds, \DateTime $dateIn, \DateTime $dateOut)
    {

        $qb = $this->createQueryBuilder('reservation')
            ->select('reservation.id, reservation.dateIn, reservation.dateOut, reservation.housingId')
            ->where('reservation.housingId IN (:ids)')
            ->andWhere('(reservation.dateIn <= :dateIn AND reservation.dateOut >= :dateIn)')
            ->orWhere('(reservation.dateIn < :dateOut AND reservation.dateOut >= :dateOut)')
            ->orWhere('(reservation.dateIn >= :dateIn AND reservation.dateIn <= :dateOut)')
            ->groupBy('reservation.id')
            ->setParameter('dateIn', $dateIn)
            ->setParameter('dateOut', $dateOut)
            ->setParameter('ids', $housingIds);

        return $qb->getQuery()->getResult();
    }


}
