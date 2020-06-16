<?php


namespace App\Controller;

use App\Entity\Genre;
use App\Form\GenreType;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class GenreController extends AbstractController
{
    public function getGenres(Environment $twig)
    {
        $repos = $this->getDoctrine()->getRepository(Genre::class);
        $genres = $repos->findAll();
        $content = $twig->render('genres.html.twig', array('genres' => $genres));
        return new Response($content);
    }


    public function addGenre(Request $request)
    {
        $form = $this->createForm(GenreType::class);
        if($request->isMethod('POST')) {
            $form->submit(($request->request->get($form->getName())));
            if($form->isSubmitted()) {
                $genre = new Genre();
                $var = $form->get('lib_genre');
                $libelle = $var->getData();
                $genre->setLibGenre($libelle);

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($genre);
                $entityManager->flush();
                
            }
        }

        return $this->render('ajouterGenre.html.twig', array('formulaire' => $form->createView()));
    }

}