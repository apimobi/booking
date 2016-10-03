<?php

namespace App\Services;

use Symfony\Component\HttpFoundation\Request;
use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Registry as Doctrine;


class PricesService
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
    * @param  Request $request
    * @return Array
    */
    public function getPrices($housingIds, $dateIn, $dateOut)
    {
        $em = $this->doctrine->getManager();
        $housings = $em->getRepository('App\Entity\Housing')->findAllByIds($housingIds);
        dump($housings);
        $arrayPrices = $em->getRepository('App\Entity\Prices')->getPrices($housingIds, $dateIn, $dateOut);
        dump($arrayPrices);
        $nbDays = $dateIn->diff($dateOut)->days;

        $prices = $this->buildPrices($nbDays, $arrayPrices, $dateIn, $dateOut);
        dump($prices);

        foreach($housings as $housing)
        {
            if(!array_key_exists($housing->getId(), $prices)){
                $housing->setCalculatedPrice($housing->getDefaultPrice()*$nbDays);
            }else{
                $finalPrice = 0;
                $days = 0;
                foreach($prices[$housing->getId()] as $price){
                    $finalPrice += $price['price'];
                    $days += $price['days'];
                }

                if($days<$nbDays){
                    $finalPrice = $finalPrice + ($nbDays - $days)*$housing->getDefaultPrice();
                }
                $housing->setCalculatedPrice($finalPrice);
            }
        }

        dump($housings);
        return $housings;

    }

    /**
     * @param $nbDays
     */
    private function getPeriode($nbDays)
    {
        $periode = "dailyPrice";

        if($nbDays>7 && $nbDays<30){
            $periode = "weeklyPrice";
        }else if($nbDays >= 30){
            $periode = "monthlyPrice";
        }

        return $periode;
    }


    /**
     *
     */
    private function buildPrices($nbDays, $prices, $dateIn, $dateOut)
    {
        $periode = $this->getPeriode($nbDays);

        $tab_house = [];

        foreach($prices as $price)
        {

            if(!in_array($price->getHousingId(), $tab_house))
            {
                $tab_house[$price->getHousingId()] = [];
            }

            if($dateIn >= $price->getDateStart() && $dateIn <= $price->getDateEnd())
            {

                if($dateOut > $price->getDateEnd())
                {
                    $diff = $price->getDateEnd()->diff($dateIn)->format("%a");
                    $tab_house[$price->getHousingId()][] = array('price'=>$diff*$price->{'get'.$periode}(),
                                                                 'days'=>$diff);
                }else{
                    $tab_house[$price->getHousingId()][] = array('price'=>$nbDays*$price->{'get'.$periode}(),
                                                                 'days'=>$nbDays);
                }
            }elseif($dateOut >= $price->getDateStart() && $dateOut <= $price->getDateEnd()){
                $diff = $price->getDateEnd()->diff($dateOut)->format("%a");
                $tab_house[$price->getHousingId()][] = array('price'=>$diff*$price->{'get'.$periode}(),
                                                             'days'=>$diff);
            }

            dump($price->getHousingId(), $tab_house[$price->getHousingId()]);

        }

        return $tab_house;

    }

}
