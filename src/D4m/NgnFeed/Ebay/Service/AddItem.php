<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 6/22/13 - 12:41 AM
 * 
 */

namespace D4m\NgnFeed\Ebay\Service;

class AddItem extends BaseApiCall
{
    protected $options;

    public function __construct($options)
    {
        $this->initializeParameters('AddItem');
        $this->options = $options;

    }
}