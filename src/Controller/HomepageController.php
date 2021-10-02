<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class HomepageController extends AbstractController
{
    /**
     * Route with normal Parameters
     * @Route("/", name="homepage")
     */
    public function home(): Response
    {
        return new Response('This is a Response with an annotation and a Controller');
    }

    /**
     * Route with Wildcards
     * @Route("{name}", name="isabell")
     */
    public function showQuestion(string $name) : Response
    {
        return new Response($name .' what are you doing here? :D');
    }
}