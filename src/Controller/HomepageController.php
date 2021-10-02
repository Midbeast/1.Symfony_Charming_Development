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
        return $this->render('/questions/homepage.html.twig');    }

    /**
     * Route with Wildcards
     * @Route("question/{question}", name="question")
     */
    public function showQuestion(string $question) : Response
    {
        $answers = [
            'Because my shoes are empty',
            'Because I am super hungry lul',
            'Because Paladins is an amazing game!'
        ];
        return $this->render('/questions/question.html.twig', [
            'question'=> $question,
            'answers'=> $answers,
        ]);
    }
}