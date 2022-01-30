<?php

namespace App\Controller;

use App\Repository\SkillsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SkillsController extends AbstractController
{
    #[Route('/skills', name: 'skills')]
    public function index(SkillsRepository $skillsRepository): Response
    {
        $skillsRepository = $skillsRepository->findAll();

        return $this->render('skills/index.html.twig', [
            'skills' => $skillsRepository,
        ]);
    }
}
