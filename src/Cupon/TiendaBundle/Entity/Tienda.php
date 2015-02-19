<?php

namespace Cupon\TiendaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity*/
class Tienda {

	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue
	*/	
	protected $id;
	/** @ORM\Column(type="string", length=100)*/
	protected $nombre;
	/** @ORM\Column(type="string", length=100)*/
	protected $slug;
	/** @ORM\Column(type="string", length=100)*/
	protected $login;
	/** @ORM\Column(type="string", length=255)*/
	protected $password;
	/** @ORM\Column(type="string", length=255)*/
	protected $salt;
	/** @ORM\Column(type="text")*/
	protected $descripcion;
	/** @ORM\Column(type="text")*/
	protected $dirección;
	/** @ORM\ManyToOne(targetEntity="Cupon\CiudadBundle\Entity\Ciudad")*/
	protected $ciudad;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Tienda
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Tienda
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Tienda
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Tienda
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Tienda
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Tienda
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set dirección
     *
     * @param string $dirección
     * @return Tienda
     */
    public function setDirección($dirección)
    {
        $this->dirección = $dirección;

        return $this;
    }

    /**
     * Get dirección
     *
     * @return string 
     */
    public function getDirección()
    {
        return $this->dirección;
    }

    /**
     * Set ciudad
     *
     * @param \Cupon\CiudadBundle\Entity\Ciudad $ciudad
     * @return Tienda
     */
    public function setCiudad(\Cupon\CiudadBundle\Entity\Ciudad $ciudad = null)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return \Cupon\CiudadBundle\Entity\Ciudad 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    public function _toString() {
        return $this->getNombre();
    }
}
