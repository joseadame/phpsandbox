<?php

namespace  Cupon\CiudadBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Cupon\CiudadBundle\Entity\Ciudad;
use Cupon\OfertaBundle\Util\Util;

class Ciudades extends AbstractFixture implements OrderedFixtureInterface {

	public function getOrder(){
		return 10;
	}

	public function load (ObjectManager $manager) {
		$ciudades = array(
				array('nombre' => 'Madrid', 'slug' => 'Madrid'),
				array('nombre' => 'Barcelona', 'slug' => 'Barcelona')

		);

		foreach ($ciudades as $ciudad) {
			$entidad = new Ciudad();
			$entidad->setNombre($ciudad['nombre']);

			$manager->persist($entidad);
		}

		$manager->flush();
	}
}