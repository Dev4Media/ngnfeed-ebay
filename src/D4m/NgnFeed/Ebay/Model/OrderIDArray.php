<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 9/5/13 - 8:50 PM
 * 
 */

namespace D4m\NgnFeed\Ebay\Model;

class OrderIDArray extends Entity
{
    protected $orderID;

    /**
     * @param mixed $orderID
     */
    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;
    }

    /**
     * @return mixed
     */
    public function getOrderID()
    {
        return $this->orderID;
    }
}