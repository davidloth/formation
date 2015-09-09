<?php

namespace Iad\TrainingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IadTrainingBundle:Default:index.html.twig', array('name' => $name));
    }
}
