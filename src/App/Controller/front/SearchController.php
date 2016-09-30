<?php

namespace App\Controller\front;

use Sensio\Bundle\FrameworkExtraBundle\Configuration as Extra;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
  *
  * @Extra\Route("/search")
  */
class SearchController extends FOSRestController
{

    /**
      *
      * @Extra\Route("/")
      * @Extra\Method({"GET"})
      * @Template
      */
    public function indexAction(Request $request)
    {

        $result = $this->container->get('app.service.search')->getResults($request);

        return [];
    }


}
