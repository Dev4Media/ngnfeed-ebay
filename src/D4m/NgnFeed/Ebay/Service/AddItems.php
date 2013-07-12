<?php

namespace D4m\NgnFeed\Ebay\Service;

class AddItems extends BaseApiCall
{
    const MAX_ITEMS = 5;
    protected $addItemRequestContainers;

    public function __construct($addItemRequestContainers)
    {
        $this->initializeParameters('AddItems');
        $this->addItemRequestContainers = $addItemRequestContainers;
    }

    public function setAddItemRequestContainer($addItemRequestContainers)
    {
        $this->addItemRequestContainers = $addItemRequestContainers;
    }

    public function execute()
    {
        $addItemsRequest = $this->getRequest();
        $counter = 1;
        foreach($this->addItemRequestContainers as $addItemRequestContainer) {
            if($counter <= self::MAX_ITEMS) {
                $addItemsRequest->addAddItemRequestContainer($addItemRequestContainer);
            }
            else {
                break;
            }
            $counter ++;
        }
        $this->parameters['request'] = $addItemsRequest;

        $response = $this->session->sendRequest($this->apiCallName, $this->parameters);

        return $response;

    }
}