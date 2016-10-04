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
    public function getPrices($housingIds, $dateIn, $dateOut, $priceMin, $priceMax)
    {
        $em = $this->doctrine->getManager();
        $housings = $em->getRepository('App\Entity\Housing')->findAllByIds($housingIds);
        $arrayPrices = $em->getRepository('App\Entity\Prices')->getPrices($housingIds, $dateIn, $dateOut);
        $nbDays = $dateIn->diff($dateOut)->days;

        $prices = $this->buildPrices($nbDays, $arrayPrices, $dateIn, $dateOut);

        foreach($housings as $key=>$housing)
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

            if($housing->getCalculatedPrice() < $priceMin ||  $housing->getCalculatedPrice() > $priceMax){
                unset($housings[$key]);
            }
        }

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

            if(!array_key_exists($price->getHousingId(), $tab_house))
            {
                $tab_house[$price->getHousingId()] = [];
            }

            if($dateIn >= $price->getDateStart() && $dateIn <= $price->getDateEnd())
            {

                if($dateOut < $price->getDateEnd())
                {
                    $tab_house[$price->getHousingId()][] = array('price'=>$nbDays*$price->{'get'.$periode}()
                                                                 ,'days'=>$nbDays);

                }else{
                    $diff = $price->getDateEnd()->diff($dateIn)->format("%a")+1;
                    $tab_house[$price->getHousingId()][] = array('price'=>$diff*$price->{'get'.$periode}(),
                        'days'=>$diff);

                }
            }elseif($dateIn < $price->getDateStart() && $dateOut > $price->getDateStart()){

                if($price->getDateEnd() <= $dateOut)
                {
                    $diff = $price->getDateStart()->diff($price->getDateEnd())->format("%a")+1;
                    $tab_house[$price->getHousingId()][] = array('price'=>$diff*$price->{'get'.$periode}()
                                                                 ,'days'=>$diff);
                }else{
                    $diff = $dateOut->diff($price->getDateStart())->format("%a")+1;
                    $tab_house[$price->getHousingId()][] = array('price'=>$diff*$price->{'get'.$periode}()
                                                                 ,'days'=>$diff);
                }

            }

        }

        return $tab_house;

    }

}
