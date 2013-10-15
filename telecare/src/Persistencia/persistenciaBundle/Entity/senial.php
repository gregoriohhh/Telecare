<?php

namespace Persistencia\persistenciaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * senial
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class senial
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;
    /**
     *
     * @ORM\ManyToOne(targetEntity="Persistencia\persistenciaBundle\Entity\paciente",inversedBy="seniales")
     * @ORM\JoinColumn(name="senial_id", referencedColumnName="id")
     */
    private $paciente;

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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return senial
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return senial
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
     * Set paciente
     *
     * @param \Persistencia\persistenciaBundle\Entity\paciente $paciente
     * @return senial
     */
    public function setPaciente(\Persistencia\persistenciaBundle\Entity\paciente $paciente = null)
    {
        $this->paciente = $paciente;
    
        return $this;
    }

    /**
     * Get paciente
     *
     * @return \Persistencia\persistenciaBundle\Entity\paciente 
     */
    public function getPaciente()
    {
        return $this->paciente;
    }
}