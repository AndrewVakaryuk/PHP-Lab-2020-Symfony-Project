<?php

namespace App\Controller;
use App\Services\Client\GuzzleClient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Services\Dictionary\Dictionary;

class SearchController extends AbstractController
{

    /**
     * @Route("/search", name="search")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getResult(Request $request, Dictionary $dictionary)
    {

        $word = $request->query->get('word');

        $result = $dictionary->entries('en-gb', $word);

        return $this->render('searchlayout.html.twig', [
            'word' => $word,
            'result' => $result,
        ]);
    }
}