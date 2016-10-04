<?php

namespace App\Services;

use Symfony\Component\HttpFoundation\Request;
use App\Entity\Reservation;
use Symfony\Component\Form\FormFactoryInterface;
use Doctrine\Bundle\DoctrineBundle\Registry as Doctrine;


class SearchService
{

  protected $doctrine;
  protected $reservationService;
  protected $priceService;

  /**
   *
   * @param Doctrine             $doctrine
   */
  public function __construct(Doctrine $doctrine, ReservationService $reservationService, PricesService $priceService)
  {
      $this->doctrine = $doctrine;
      $this->reservationService = $reservationService;
      $this->priceService = $priceService;
  }


  /**
   * @param  Request $request
   * @return Array
   */
  public function getResults($dateIn, $dateOut, $priceMin = 100, $priceMax = 500)
  {

      $dateCheckin = new \DateTime($dateIn);
      $dateCheckout = new \DateTime($dateOut);

      $availableHousing = $this->reservationService->findAvailablesHousing([1,2,3,4,5,6], $dateCheckin, $dateCheckout);

      //dump($availableHousing);

      $results = $this->priceService->getPrices($availableHousing, $dateCheckin, $dateCheckout, $priceMin, $priceMax);



      return $results;

  }

}
