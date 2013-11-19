<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 6/27/13 - 9:52 PM
 * 
 */

namespace D4m\NgnFeed\Ebay\Model\Request;

use D4m\NgnFeed\Ebay\Model\Entity;

class BaseRequest extends Entity
{
    protected $errorLanguage;
    protected $warningLevel;
    protected $requesterCredentials;
    protected $detailLevel;

    public function __construct()
    {
        $this->errorLanguage = "en_US";
        $this->warningLevel = "High";
    }

    /**
     * @param string $errorLanguage
     */
    public function setErrorLanguage($errorLanguage)
    {
        $this->errorLanguage = $errorLanguage;
    }

    /**
     * @return string
     */
    public function getErrorLanguage()
    {
        return $this->errorLanguage;
    }

    /**
     * @param mixed $requesterCredentials
     */
    public function setRequesterCredentials($requesterCredentials)
    {
        $this->requesterCredentials = $requesterCredentials;
    }

    /**
     * @return mixed
     */
    public function getRequesterCredentials()
    {
        return $this->requesterCredentials;
    }

    /**
     * @param string $warningLevel
     */
    public function setWarningLevel($warningLevel)
    {
        $this->warningLevel = $warningLevel;
    }

    /**
     * @return string
     */
    public function getWarningLevel()
    {
        return $this->warningLevel;
    }

    /**
     * @param mixed $detailLevel
     */
    public function setDetailLevel($detailLevel)
    {
        $this->detailLevel = $detailLevel;
    }

    /**
     * @return mixed
     */
    public function getDetailLevel()
    {
        return $this->detailLevel;
    }

    public function addRequesterCredentials($token)
    {
        $requesterCredentials = new RequesterCredentials();
        $requesterCredentials->setEBayAuthToken($token);
        $this->requesterCredentials = $requesterCredentials;
    }
}