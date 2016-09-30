<?php

namespace App\Services;

use Symfony\Component\HttpFoundation\Request;
use App\Entity\Product;
use App\Form\Type\ProductType;
use Symfony\Component\Form\FormFactoryInterface;
use Doctrine\Bundle\DoctrineBundle\Registry as Doctrine;


class SearchService
{

  protected $forms;
  protected $doctrine;

  /**
   *
   * @param FormFactoryInterface $forms
   * @param Doctrine             $doctrine
   */
  public function __construct(FormFactoryInterface $forms, Doctrine $doctrine)
  {
      $this->forms = $forms;
      $this->doctrine = $doctrine;
  }


  /**
   * @param  Request $request
   * @return Array
   */
  public function getResults()
  {
      $em = $this->doctrine->getManager();

      $results = null;

      if($results)
      {
         return $results;
      }else{
         return 'Not found';
      }

  }

}
