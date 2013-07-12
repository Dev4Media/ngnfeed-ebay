<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 6/22/13 - 12:43 AM
 * 
 */

namespace D4m\NgnFeed\Ebay\Service;


class VerifyAddItem extends BaseApiCall
{
    protected $options;

    public function __construct($options)
    {
        $this->initializeParameters('VerifyAddItem');
        $this->options = $options;
    }
}