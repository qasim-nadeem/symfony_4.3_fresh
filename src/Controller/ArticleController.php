<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function homepage()
    {
        return new Response(' new symfony sitre');
    }

    /**
     * @Route("/post/{slug}")
     * @return Response
     */
    public function show($slug)
    {
        return $this->render('show.html.twig',
            [
                'name' => $slug
            ]
        );
    }
}