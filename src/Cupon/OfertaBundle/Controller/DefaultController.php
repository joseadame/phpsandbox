<?php

namespace Cupon\OfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OfertaBundle:Default:index.html.twig', array('name' => $name));
    }

    public function portadaAction() {
    	$em = $this->getDoctrine()->getEntityManager();
    	$oferta = $em->getRepository('OfertaBundle:Oferta')->findOneBy(array('ciudad' => 1, 'fechaPublicacion' => new \DateTime('today')));
    	return $this->render('OfertaBundle:Default:portada.html.twig',array('oferta' => $oferta));
    }
}
