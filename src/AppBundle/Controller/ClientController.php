<?php
/**
 * Created by PhpStorm.
 * User: Ayoub
 * Date: 19/11/2017
 * Time: 17:45
 */

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;

class ClientController extends FOSRestController
{
    /**
     * @Route("/Client1")
     * @Method("GET")
     */
    public function indexAction()
    {
        $clientManager = $this->container->get('fos_oauth_server.client_manager.default');
        $client = $clientManager->createClient();
        $client->setRedirectUris(array(''));
        $client->setAllowedGrantTypes(array('password'));
        $clientManager->updateClient($client);
        return new Response($this->get('serializer')->serialize($client, 'json'));
    }
}