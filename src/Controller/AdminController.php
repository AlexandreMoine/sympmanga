<?php


namespace App\Controller;

use App\Entity\Dessinateur;
use App\Entity\Manga;
use App\Entity\Scenariste;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class AdminController extends AbstractController
{
    public function getBO(Environment $twig)
    {
        $reposM = $this->getDoctrine()->getRepository(Manga::class);
        $reposS = $this->getDoctrine()->getRepository(Scenariste::class);
        $reposD = $this->getDoctrine()->getRepository(Dessinateur::class);


        $mangas = $reposM->findAll();
        $scenaristes = $reposS->findAll();
        $dessinateurs = $reposD->findAll();

        $content = $twig->render('backoffice.html.twig', array('mangas' => $mangas,
            'scenaristes' => $scenaristes,
            'dessinateurs' => $dessinateurs
        ));
        return new Response($content);
    }
}