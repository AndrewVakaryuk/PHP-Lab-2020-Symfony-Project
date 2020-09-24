<?php


namespace App\Controller\Services;


class Dictionary
{
    private $client;

    private function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @param string $lang
     * @param string $word
     * @return array
     */
    public function entries(string $lang = 'en-gb', string $word) : array
    {
        try {
            $body = $this->client->get(sprintf(
                'entries/%s/%s',
                $lang,
                $word
            ));
        } catch (ClientException $e) {

        }
        $pronunciation = $body['results'][0]['lexicalEntries'][0]['entries'][0]['pronunciations'][0]['audioFile'];
        $definition = $body['results'][0]['lexicalEntries'][0]['entries'][0]['senses'][0]['definitions'];
        $data = [
            'pronunciation' => $pronunciation,
            'definition' => $definition
        ];
    }
}