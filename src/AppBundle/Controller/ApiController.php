<?php
/**
 * Created by PhpStorm.
 * User: Ayoub
 * Date: 19/11/2017
 * Time: 17:45
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;

class ApiController extends FOSRestController
{
    /**
     * @Route("/api")
     */
    public function getDemosAction()
    {

        $data = array("hello" => "world","test" =>$this->get('security.token_storage')->getToken()->getUser());
        $view = $this->view($data);
        return $this->handleView($view);
    }
}