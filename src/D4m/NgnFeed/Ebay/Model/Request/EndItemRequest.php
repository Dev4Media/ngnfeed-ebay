<?php

namespace D4m\NgnFeed\Ebay\Model\Request;

class EndItemRequest extends BaseRequest
{
    protected $itemID;
    protected $endingReason;
    protected $sellerInventoryID;

    /**
     * @param mixed $endingReason
     */
    public function setEndingReason($endingReason)
    {
        $this->endingReason = $endingReason;
    }

    /**
     * @return mixed
     */
    public function getEndingReason()
    {
        return $this->endingReason;
    }

    /**
     * @param mixed $itemID
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
    }

    /**
     * @return mixed
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * @param mixed $sellerInventoryID
     */
    public function setSellerInventoryID($sellerInventoryID)
    {
        $this->sellerInventoryID = $sellerInventoryID;
    }

    /**
     * @return mixed
     */
    public function getSellerInventoryID()
    {
        return $this->sellerInventoryID;
    }
}