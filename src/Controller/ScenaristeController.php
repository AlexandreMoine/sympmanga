<?php


namespace App\Controller;

use App\Entity\Scenariste;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class ScenaristeController extends AbstractController
{
    public function getScenaristes(Environment $twig)
    {
        $repos = $this->getDoctrine()->getRepository(Scenariste::class);
        $scenaristes = $repos->findAll();
        $content = $twig->render('scenaristes.html.twig', array('scenaristes' => $scenaristes));
        return new Response($content);
    }
}