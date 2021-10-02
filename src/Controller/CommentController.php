<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @Route ("/comment/{id}/vote/{direction}", name="comment_vote")
     */
    public function commentVote($id, $direction){

        // use real logic later one with a Database here
        if($direction === 'up'){
            $currentVote = rand(7,100);
        }
        else{
           $currentVote = rand(0,5);
        }
        return $this->json(['votes' => $currentVote]);
    }

}