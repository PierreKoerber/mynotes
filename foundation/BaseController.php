<?php
namespace AppBundle\foundation ;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use Symfony\Component\HttpFoundation\Session\Session ;

use FOS\RestBundle\Controller\FOSRestController;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;


class BaseController extends Controller
{


	
  public function getJsonAction(Request $request, $entity)
  {
  
    $em = $this->getDoctrine()->getManager();
    $repo = $em->getRepository($entity) ;
    $pageSize = $request->query->getInt('pagesize', 10) ;
    
    // params
    $page = $request->query->getInt('page', 0) ;

    $filters[1]=  $request->query->get('name', null) ;
    $filters[2]=  $request->query->get('street', null) ;
    $filters[3]=  $request->query->get('city', null) ;
    $order = 1 ;

    // get the user
    $id = null ;
   
    $pagination = $repo->getEntitiesWithPagination($page, $pageSize, $filters,$order) ;

    $json = $this->get('jms_serializer')->serialize($pagination, 'json') ;
    $response = new Response( $json );
    $response->headers->set('Content-Type', 'application/json');
    return $response;
  }



}
