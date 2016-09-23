<?php

namespace Yoda\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

    	//$em = $this->container->get('doctrine')->getManager();
    	$em = $this->getDoctrine()->getManager();
    	$repo = $em->getRepository('EventBundle:Event');

    	$event = $repo->findOneBy(array(
    		'id' => 1,
    	));

        return $this->render('EventBundle:Default:index.html.twig',
        	array('event' => $event)
        );
    }
}
