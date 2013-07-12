<?php

namespace D4m\NgnFeed\Ebay\Model;

class AddItemRequestContainer extends Entity
{
    protected $item;
    protected $messageID;

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

    /**
     * @param mixed $messageID
     */
    public function setMessageID($messageID)
    {
        $this->messageID = $messageID;
    }

    /**
     * @return mixed
     */
    public function getMessageID()
    {
        return $this->messageID;
    }
}
