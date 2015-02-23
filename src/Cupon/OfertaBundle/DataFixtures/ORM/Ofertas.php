<?php

namespace  Cupon\OfertaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Cupon\OfertaBundle\Entity\Oferta;
use Cupon\OfertaBundle\Util\Util;

class Ofertas implements OrderedFixtureInterface {

	public function getOrder(){
		return 3;
	}

	public function load (ObjectManager $manager) {
		
		for ($i=0; $i < 400 ; $i++) { 
			$entidad = new Oferta();
			$entidad->setNombre('Oferta'.$i);
			$entidad->setPrecio(rand(1, 100));
			$entidad->setFechaPublicacion(new \DateTime());
			$entidad->setDescripcion('Descripcion Oferta'.$i);
			$entidad->setCondiciones('Condicion Oferta'.$i);
			$entidad->setFoto('Foto');
			$entidad->setDescuento(0.9);
			$entidad->setFechaExpiracion(new \DateTime());
			$entidad->setUmbral(9);
			$entidad->setRevisada(true);
			$manager->persist($entidad);

		}
		
		$manager->flush();
	}
}