<?php

namespace D4m\NgnFeed\Ebay\Service;

class ReviseItem extends BaseApiCall
{
    protected $options;

    public function __construct($options)
    {
        $this->initializeParameters('ReviseItem');
        $this->options = $options;
    }
}