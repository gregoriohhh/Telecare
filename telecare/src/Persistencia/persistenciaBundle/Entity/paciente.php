<?php

namespace Persistencia\persistenciaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * paciente
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class paciente
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
     * @ORM\Column(name="Documento", type="integer")
     */
    private $documento;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=50)
     */
    private $apellido;

    /**
     * @var integer
     *
     * @ORM\Column(name="edad", type="integer")
     */
    private $edad;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=1)
     */
    private $sexo;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=20)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="DescripcionEnfermedad", type="string", length=255)
     */
    private $descripcionEnfermedad;
    
    /**
     *
     * @ORM\ManyToMany(targetEntity="Persistencia\persistenciaBundle\Entity\Contacto", mappedBy="pacientes")
     */
    private $contactos;
    
    /**
     *
     * @ORM\ManyToMany(targetEntity="Persistencia\persistenciaBundle\Entity\especialista", mappedBy="pacientes")
     */
    private $especialistas;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="Persistencia\persistenciaBundle\Entity\senial", mappedBy="paciente")
     */
    private $seniales;
    
    public function __construct() {
        $this->contactos= new \Doctrine\Common\Collections\ArrayCollection();
        $this->seniales= new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set documento
     *
     * @param integer $documento
     * @return paciente
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;
    
        return $this;
    }

    /**
     * Get documento
     *
     * @return integer 
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return paciente
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
     * @return paciente
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
     * Set edad
     *
     * @param integer $edad
     * @return paciente
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    
        return $this;
    }

    /**
     * Get edad
     *
     * @return integer 
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     * @return paciente
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    
        return $this;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return paciente
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
     * Set email
     *
     * @param string $email
     * @return paciente
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
     * Set descripcionEnfermedad
     *
     * @param string $descripcionEnfermedad
     * @return paciente
     */
    public function setDescripcionEnfermedad($descripcionEnfermedad)
    {
        $this->descripcionEnfermedad = $descripcionEnfermedad;
    
        return $this;
    }

    /**
     * Get descripcionEnfermedad
     *
     * @return string 
     */
    public function getDescripcionEnfermedad()
    {
        return $this->descripcionEnfermedad;
    }

    /**
     * Add contactos
     *
     * @param \Persitencia\persitenciaBundle\Entity\Contacto $contactos
     * @return paciente
     */
    public function addContacto(\Persitencia\persitenciaBundle\Entity\Contacto $contactos)
    {
        $this->contactos[] = $contactos;
    
        return $this;
    }

    /**
     * Remove contactos
     *
     * @param \Persitencia\persitenciaBundle\Entity\Contacto $contactos
     */
    public function removeContacto(\Persitencia\persitenciaBundle\Entity\Contacto $contactos)
    {
        $this->contactos->removeElement($contactos);
    }

    /**
     * Get contactos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContactos()
    {
        return $this->contactos;
    }

    /**
     * Add especialistas
     *
     * @param \Persistencia\persistenciaBundle\Entity\especialista $especialistas
     * @return paciente
     */
    public function addEspecialista(\Persistencia\persistenciaBundle\Entity\especialista $especialistas)
    {
        $this->especialistas[] = $especialistas;
    
        return $this;
    }

    /**
     * Remove especialistas
     *
     * @param \Persistencia\persistenciaBundle\Entity\especialista $especialistas
     */
    public function removeEspecialista(\Persistencia\persistenciaBundle\Entity\especialista $especialistas)
    {
        $this->especialistas->removeElement($especialistas);
    }

    /**
     * Get especialistas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEspecialistas()
    {
        return $this->especialistas;
    }

    /**
     * Add seniales
     *
     * @param \Persistencia\persistenciaBundle\Entity\senial $seniales
     * @return paciente
     */
    public function addSeniale(\Persistencia\persistenciaBundle\Entity\senial $seniales)
    {
        $this->seniales[] = $seniales;
    
        return $this;
    }

    /**
     * Remove seniales
     *
     * @param \Persistencia\persistenciaBundle\Entity\senial $seniales
     */
    public function removeSeniale(\Persistencia\persistenciaBundle\Entity\senial $seniales)
    {
        $this->seniales->removeElement($seniales);
    }

    /**
     * Get seniales
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSeniales()
    {
        return $this->seniales;
    }
}