<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 7/4/13 - 1:26 AM
 * 
 */

namespace D4m\NgnFeed\Ebay\Model\Request;

use D4m\NgnFeed\Ebay\Model\Entity;

class RequesterCredentials extends Entity
{
    protected $eBayAuthToken;

    /**
     * @param mixed $eBayAuthToken
     */
    public function setEBayAuthToken($eBayAuthToken)
    {
        $this->eBayAuthToken = $eBayAuthToken;
    }

    /**
     * @return mixed
     */
    public function getEBayAuthToken()
    {
        return $this->eBayAuthToken;
    }



}