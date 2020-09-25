<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TagsCloudController extends AbstractController
{
    /**
     * @Route("/tags")
     */
    public function tags(){
        //$searches =

        return $this->render('tag_cloud.html.twig', [
            'searches' => $searches,
        ]);
    }

}