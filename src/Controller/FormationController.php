<?php

namespace App\Controller;

use App\Repository\FormationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormationController extends AbstractController
{
    #[Route('/formation', name: 'formation')]
    public function index(FormationRepository $formationRepository): Response
    {
        $formationRepository = $formationRepository->findAll();

        return $this->render('formation/index.html.twig', [
            'formation' => $formationRepository,
        ]);
    }
}
