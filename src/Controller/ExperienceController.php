<?php

namespace App\Controller;

use App\Entity\Experience;
use App\Repository\ExperienceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExperienceController extends AbstractController
{
    #[Route('/experience', name: 'experience')]
    public function index(ExperienceRepository $experienceRepository): Response
    {

        $experienceRepository = $experienceRepository->findall();

        return $this->render('experience/index.html.twig', [
            'experience' => $experienceRepository,
        ]);
    }
}
