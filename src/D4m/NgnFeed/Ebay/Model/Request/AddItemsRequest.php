<?php

namespace D4m\NgnFeed\Ebay\Model\Request;

class AddItemsRequest extends BaseRequest
{
    protected $addItemRequestContainer;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param mixed $addItemRequestContainer
     */
    public function setAddItemRequestContainer($addItemRequestContainer)
    {
        $this->addItemRequestContainer = $addItemRequestContainer;
    }

    /**
     * @return mixed
     */
    public function getAddItemRequestContainer()
    {
        return $this->addItemRequestContainer;
    }
}
