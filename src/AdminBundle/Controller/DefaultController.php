<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }

    public function EditAction()
    {
        return $this->render('AdminBundle:Default:Edit.html.twig');
    }

    public function PublicViewAction()
    {
        return $this->render('AdminBundle:Default:PublicView.html.twig');
    }

    public function AddCartAction()
    {
        return $this->render('AdminBundle:Default:AddCartAction.html.twig');
    }

    public function AddMeterAction()
    {
        return $this->render('AdminBundle:Default:AddMeter.html.twig');
    }

    //consulter les facteurs a chaque compteur
    public function InvoiceAction()
    {
        return $this->render('AdminBundle:Default:Invoice.html.twig');
    }

}
