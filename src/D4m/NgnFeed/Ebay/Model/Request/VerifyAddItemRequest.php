<?php

namespace D4m\NgnFeed\Ebay\Model\Request;

class VerifyAddItemRequest extends BaseRequest
{
    protected $item;
    protected $includeExpressRequirements;
    protected $externalProductID;

    /**
     * @param mixed $externalProductID
     */
    public function setExternalProductID($externalProductID)
    {
        $this->externalProductID = $externalProductID;
    }

    /**
     * @return mixed
     */
    public function getExternalProductID()
    {
        return $this->externalProductID;
    }

    /**
     * @param mixed $includeExpressRequirements
     */
    public function setIncludeExpressRequirements($includeExpressRequirements)
    {
        $this->includeExpressRequirements = $includeExpressRequirements;
    }

    /**
     * @return mixed
     */
    public function getIncludeExpressRequirements()
    {
        return $this->includeExpressRequirements;
    }

    /**
     * @param mixed $item
     */
    public function setItem($item)
    {
        $this->item = $item;
    }

    /**
     * @return mixed
     */
    public function getItem()
    {
        return $this->item;
    }
}