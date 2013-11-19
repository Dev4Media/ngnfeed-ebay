<?php

namespace D4m\NgnFeed\Ebay\Model\Request;

class AddItemRequest extends BaseRequest
{
    protected $item;

    public function __construct()
    {
        parent::__construct();
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