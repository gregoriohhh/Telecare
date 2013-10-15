<?php

namespace Persistencia\persistenciaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * especialista
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class especialista
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
     * @var integer
     *
     * @ORM\Column(name="codigo", type="integer")
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=20)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=20)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoEspecialista", type="string", length=255)
     */
    private $tipoEspecialista;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=20)
     */
    private $telefono;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarjetaprofesional", type="integer")
     */
    private $tarjetaprofesional;

     /**
     *
     * @ORM\ManyToMany(targetEntity="Persistencia\persistenciaBundle\Entity\paciente")
     * @ORM\JoinTable(name="pacientes_especialistas",
     *      joinColumns={@ORM\JoinColumn(name="especialista_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="paciente_id", referencedColumnName="id")}
     *      )
     */
    private $pacientes;
    
    public function __construct() {
        $this->pacientes= new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function __toString() {
        return $this->nombre." ".$this->apellido." ".$this->telefono;
    }

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
     * Set codigo
     *
     * @param integer $codigo
     * @return especialista
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    
        return $this;
    }

    /**
     * Get codigo
     *
     * @return integer 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return especialista
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
     * Set apellido
     *
     * @param string $apellido
     * @return especialista
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    
        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set tipoEspecialista
     *
     * @param string $tipoEspecialista
     * @return especialista
     */
    public function setTipoEspecialista($tipoEspecialista)
    {
        $this->tipoEspecialista = $tipoEspecialista;
    
        return $this;
    }

    /**
     * Get tipoEspecialista
     *
     * @return string 
     */
    public function getTipoEspecialista()
    {
        return $this->tipoEspecialista;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return especialista
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return especialista
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set tarjetaprofesional
     *
     * @param integer $tarjetaprofesional
     * @return especialista
     */
    public function setTarjetaprofesional($tarjetaprofesional)
    {
        $this->tarjetaprofesional = $tarjetaprofesional;
    
        return $this;
    }

    /**
     * Get tarjetaprofesional
     *
     * @return integer 
     */
    public function getTarjetaprofesional()
    {
        return $this->tarjetaprofesional;
    }

    /**
     * Add pacientes
     *
     * @param \Persistencia\persistenciaBundle\Entity\paciente $pacientes
     * @return especialista
     */
    public function addPaciente(\Persistencia\persistenciaBundle\Entity\paciente $pacientes)
    {
        $this->pacientes[] = $pacientes;
    
        return $this;
    }

    /**
     * Remove pacientes
     *
     * @param \Persistencia\persistenciaBundle\Entity\paciente $pacientes
     */
    public function removePaciente(\Persistencia\persistenciaBundle\Entity\paciente $pacientes)
    {
        $this->pacientes->removeElement($pacientes);
    }

    /**
     * Get pacientes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPacientes()
    {
        return $this->pacientes;
    }
}