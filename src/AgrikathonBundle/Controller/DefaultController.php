<?php

namespace AgrikathonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/index", name="index")
     */
    public function indexAction()
    {
        return $this->render('AgrikathonBundle:Default:index.html.twig');
    }

    /**
    **
    * @Route("/liste",  name="liste")
    */
    public function listeAction()
    {
        return $this->render('AgrikathonBundle:Default:listereponse.html.twig');
    }

    /**
     **
     * @Route("/depot",  name="depot")
     */
    public function depotAction()
    {
        return $this->render('AgrikathonBundle:Default:depotann.html.twig');
    }


    /**
     **
     * @Route("/login1",  name="login1")
     */
    public function loginAction()
    {
        return $this->render(':FosUserSecurity:login.html.twig');
    }

}
