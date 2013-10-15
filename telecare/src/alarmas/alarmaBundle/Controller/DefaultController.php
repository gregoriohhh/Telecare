<?php

namespace alarmas\alarmaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('alarmasalarmaBundle:Default:index.html.twig', array('name' => $name));
    }
}
