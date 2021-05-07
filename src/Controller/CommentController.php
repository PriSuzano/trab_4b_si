<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @Route("/comentarios/{id}/voto/{direction<up|down>}", methods="POST")
     */
    public function comentarioVoto($id, $direction)
    {
        if ($direction === 'up') {
            $currentVoteCount = rand(6, 6);
        } else {
            $currentVoteCount = rand(5, 5);
        }
        return new JsonResponse(['votes' => $currentVoteCount]);
    }
}