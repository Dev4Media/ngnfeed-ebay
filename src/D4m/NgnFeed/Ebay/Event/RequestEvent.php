<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 9/13/13 - 1:55 AM
 * 
 */

namespace D4m\NgnFeed\Ebay\Event;

use Symfony\Component\EventDispatcher\Event;

class RequestEvent extends Event
{
    private $headers;
    private $body;

    public function __construct($data)
    {
        $this->headers = (isset($data['headers']))?$data['headers']:null;
        $this->body = (isset($data['body']))?$data['body']:null;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function getBody()
    {
        return $this->body;
    }
}