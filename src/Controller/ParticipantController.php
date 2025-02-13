<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ParticipantController extends AbstractController
{
    #[Route('/participant', name: 'app_participant')]
    
    public function participantPage(): Response
    {
        return $this->render('participant/index.html.twig');
    }
}
