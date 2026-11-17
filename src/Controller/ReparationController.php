<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\AjoutReparationType;

final class ReparationController extends AbstractController
{
    #[Route('/reparation', name: 'app_reparation')]
    public function demandeReparation(): Response
    {
        $form=$this->createForm(AjoutReparationType::class);
        return $this->render('reparation/reparation.html.twig', ['formAjoutReparation'=>$form->createView(),]);
    }
}
