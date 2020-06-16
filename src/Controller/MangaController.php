<?php


namespace App\Controller;

use App\Entity\Manga;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class MangaController extends AbstractController
{
    public function index(Environment $twig)
    {
        $content = $twig->render('accueil.html.twig');
        return new Response($content);
    }


    public function getMangas(Environment $twig)
    {
        $repos = $this->getDoctrine()->getRepository(Manga::class);
        $mangas = $repos->findAll();
        $content = $twig->render('mangas.html.twig', array('mangas' => $mangas));
        return new Response($content);
    }

}