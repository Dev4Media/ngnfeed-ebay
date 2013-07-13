<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 6/22/13 - 10:19 AM
 * 
 */

namespace D4m\NgnFeed\Ebay\Transport;


use Guzzle\Http\Client;

class HttpClient
{
    private $client;

    public function __construct(Client $client = null)
    {
        if(is_null($client)) {
           $this->client = new Client();
        }
        else {
            $this->client = $client;
        }

    }

    /**
     * @param \Guzzle\Http\Client $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @return \Guzzle\Http\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    public function send($url, $headers, $postBody)
    {
        $request = $this->client->post($url, $headers, $postBody );
        return $request->send();
    }

}