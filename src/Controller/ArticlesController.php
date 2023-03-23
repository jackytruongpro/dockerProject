<?php

namespace App\Controller;


use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class ArticlesController extends AbstractController
{
    #[Route('/articles', name: 'app_articles')]
    public function index(Environment $twig, ArticleRepository $articleRepository): Response
    {
        return new Response($twig->render('articles/index.html.twig', [
            'articles' => $articleRepository->findAll(),
        ]));
    }
}
