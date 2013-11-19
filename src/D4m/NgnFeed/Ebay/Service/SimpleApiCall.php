<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 7/11/13 - 6:44 PM
 * 
 */

namespace D4m\NgnFeed\Ebay\Service;

class SimpleApiCall extends BaseApiCall
{
    protected $options;

    public function __construct($serviceName, $options)
    {
        $this->initializeParameters($serviceName);
        $this->options = $options;
    }
}