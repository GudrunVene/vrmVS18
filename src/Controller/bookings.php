<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class bookings extends AbstractController
{
    public function number()
    {
        

        return $this->render('views/base.html.twig');
    }
}
