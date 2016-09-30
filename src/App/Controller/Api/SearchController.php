<?php

namespace App\Controller\Api;

use Sensio\Bundle\FrameworkExtraBundle\Configuration as Extra;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use App\Entity\Product;

/**
* @Extra\Route("/search")
*/
class SearchController extends FOSRestController
{

    /**
      * POST search
      *
      * @ApiDoc(
      *  section="Search",
      *  resource=true,
      *  description="This method will return search results",
      *  statusCodes={
      *      200="Returned when successful",
      *      403="Returned when the user is not authorized",
      *      404={
      *        "Returned when the posts are not found"
      *      }
      * },
      * parameters={
      *      {
      *          "name"="search[date_in]",
      *          "dataType"="date",
      *          "description"="date in",
      *          "required"=true
      *      },
      *      {
      *          "name"="search[date_out]",
      *          "dataType"="date",
      *          "description"="date out",
      *          "required"=true
      *      }
      * }
      * )
      *
      * @Extra\Route("/create")
      * @Extra\Method({"POST"})
      * @Rest\View()
      *
      * @param Request $request
      *
      * @return json
      */
    public function indexAction(Request $request)
    {
      return $this->container->get('app.service.search')->getResults($request);
    }

}
