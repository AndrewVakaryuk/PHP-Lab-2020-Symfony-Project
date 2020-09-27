<?php

namespace App\Controller;
use App\Services\GuzzleClient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Services\Dictionary;

class SearchController extends AbstractController
{
    public $result;
    public $client;

    public function getResult(Dictionary $dictionary)
    {
        $client = new GuzzleClient('https://od-api.oxforddictionaries.com/api/v2/entries',
            'e4fa8297', 'c84197ccd823305312a3b687435fe4b2');

        $result = $dictionary->entries('en-gb', 'tea');
        dd($result);
    }
}