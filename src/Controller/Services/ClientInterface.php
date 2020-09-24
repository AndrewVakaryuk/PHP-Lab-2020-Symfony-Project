<?php
namespace App\Controller\Services;

interface ClientInterface
{
    /**
     * @param string $url
     * @return mixed
     * @throws ClientException
     */
    public function get(string $url);
}
