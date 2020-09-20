<?php

namespace App\Controller;

use App\Form\ProcessType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('default/index.html.twig', [
            'form' => $this->createForm(ProcessType::class)->createView(),
        ]);
    }
}
