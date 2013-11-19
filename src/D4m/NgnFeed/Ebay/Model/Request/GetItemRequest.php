<?php

namespace D4m\NgnFeed\Ebay\Model\Request;


class GetItemRequest extends BaseRequest
{
    protected $itemID;

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
}