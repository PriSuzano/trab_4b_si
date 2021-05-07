<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage()
    {
        return $this->render('perguntas/homepage.html.twig', [
        ]);
    }

    /**
     * @Route("/pergunta/{slug}", name="pergunta")
     */
    public function pergunta($slug)
    {
        $respostas = [
            'Ele é bom mesmo!',
            'Muito facil de aprender!',
            'Eu amei!',
        ];

        return $this->render('perguntas/pergunta.html.twig', [
            'pergunta' => ucwords(str_replace('-', ' ', $slug)),
            'respostas' => $respostas,
        ]);
    }
}