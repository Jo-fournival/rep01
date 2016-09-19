<?php

namespace AddBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller {

    /**
     * @Route("/home", name = "home")
     */
    public function indexhome() {
        return $this->render('AddBundle::newTwigTemplate.html.twig');
    }

    /**
     * @Route("/apropos", name = "qui")
     */
    public function indexApropos() {
        return $this->render('AddBundle::apropos.html.twig');
    }

    /**
     * @Route("/contact",name = "contact")
     */
    public function indexContact() {
        return $this->render('AddBundle::contact.html.twig');
    }

    /**
     * @Route("/experience",name = "exp")
     */
    public function indexExperience() {
        return $this->render('AddBundle::experience.html.twig');
    }

    /**
     * @Route("/formation",name = "form")
     */
    public function indexFormation() {
        return $this->render('AddBundle::formation.html.twig');
    }

    /**
     * @Route("/loisir",name = "loisir")
     */
    public function indexLoisir() {
        return $this->render('AddBundle::loisir.html.twig');
    }

}
