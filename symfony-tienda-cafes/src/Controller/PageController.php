<?php

namespace App\Controller;

use App\Entity\Marca;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

class PageController extends AbstractController
{

    public function marcaTemplate(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Marca::class);
        $marca = $repository->findAll();
        return $this->render('partials/_marca.html.twig', 
            compact('marca')
        );
    }

    #[Route('/', name: 'index')]
    public function index(ManagerRegistry $doctrine): Response
    {
        return $this->render('page/index.html.twig');
    }

    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return $this->render('page/about.html.twig', []);
    }

    #[Route('/menu', name: 'menu')]
    public function menu(): Response
    {
        return $this->render('page/menu.html.twig', []);
    }

    #[Route('/marca', name: 'marca')]
    public function marca(): Response
    {
        return $this->render('page/marca.html.twig', []);
    }

    #[Route('/review', name: 'review')]
    public function review(): Response
    {
        return $this->render('page/review.html.twig', []);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('page/contact.html.twig', []);
    }
}