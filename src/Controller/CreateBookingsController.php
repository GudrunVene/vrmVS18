<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CreateBookingsController extends AbstractController
{
    public function base()
    {
       
        return $this->render('views/base.html.twig');
    }
}