<?php

namespace Persistencia\persistenciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Persistencia\persistenciaBundle\Entity\senial;

class DefaultController extends Controller
{
    var $alumnos = array (
            array("id"=>1,"nombre"=>"sebastian"),
            array("id"=>2,"nombre"=>"Andrea")
        );
    
    public function indexAction()
    {
       
    }
    
    public function CrearSenialAction(senial $senial)
    {
       $em = $this->getDoctrine()->getManager();
       $em->persist($senial);
       $em->flush();
    }
    
    
            
}
