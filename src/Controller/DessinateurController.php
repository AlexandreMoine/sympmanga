<?php


namespace App\Controller;


use App\Entity\Dessinateur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class DessinateurController extends AbstractController
{
    public function getDessinateurs(Environment $twig)
    {
        $repos = $this->getDoctrine()->getRepository(Dessinateur::class);
        $dessinateurs = $repos->findAll();
        $content = $twig->render('dessinateurs.html.twig', array('dessinateurs' => $dessinateurs));
        return new Response($content);
    }
}