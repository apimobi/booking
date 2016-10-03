<?php

namespace App\Services;

use Symfony\Component\HttpFoundation\Request;
use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Registry as Doctrine;


class ReservationService
{

    protected $doctrine;

    /**
    *
    * @param Doctrine             $doctrine
    */
    public function __construct(Doctrine $doctrine)
    {
      $this->doctrine = $doctrine;
    }

    /**
     * @param  Array    $housingIds
     * @param  Datetime     $dateIn
     * @param  Datetime     $dateOut
     * @return Array
     */

    public function findAvailablesHousing(array $housingIds, \Datetime $dateIn, \Datetime $dateOut)
    {
        $reservations = $this->searchReservationsByDate($housingIds, $dateIn, $dateOut);

        $housingIds = array_flip($housingIds);

        foreach($reservations as $reservation)
        {
            if(array_key_exists($reservation['housingId'], $housingIds)){
                unset($housingIds[$reservation['housingId']]);
            }
        }

        return $housingIds = array_values(array_flip($housingIds));

    }

    /**
     *
     * @param  Array    $housingIds
     * @param  Datetime     $dateIn
     * @param  Datetime     $dateOut
     * @return Array
     */
    public function searchReservationsByDate(array $housingIds, \Datetime $dateIn, \Datetime $dateOut)
    {
      $em = $this->doctrine->getManager();
      $reservation = $em->getRepository('App\Entity\Reservation');

      $results = $reservation->searchByDate($housingIds, $dateIn, $dateOut);

      return $results;
    }

}
