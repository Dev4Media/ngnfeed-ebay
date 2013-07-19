<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 7/19/13 - 3:23 AM
 * 
 */

namespace D4m\NgnFeed\Ebay\Model;

class ReviseStatus extends Entity
{
    protected $itemRevised;
    protected $buyItNowAdded;
    protected $buyItNowLowered;
    protected $reserveLowered;
    protected $reserveRemoved;
    protected $any;

    /**
     * @param mixed $any
     */
    public function setAny($any)
    {
        $this->any = $any;
    }

    /**
     * @return mixed
     */
    public function getAny()
    {
        return $this->any;
    }

    /**
     * @param mixed $buyItNowAdded
     */
    public function setBuyItNowAdded($buyItNowAdded)
    {
        $this->buyItNowAdded = $buyItNowAdded;
    }

    /**
     * @return mixed
     */
    public function getBuyItNowAdded()
    {
        return $this->buyItNowAdded;
    }

    /**
     * @param mixed $buyItNowLowered
     */
    public function setBuyItNowLowered($buyItNowLowered)
    {
        $this->buyItNowLowered = $buyItNowLowered;
    }

    /**
     * @return mixed
     */
    public function getBuyItNowLowered()
    {
        return $this->buyItNowLowered;
    }

    /**
     * @param mixed $itemRevised
     */
    public function setItemRevised($itemRevised)
    {
        $this->itemRevised = $itemRevised;
    }

    /**
     * @return mixed
     */
    public function getItemRevised()
    {
        return $this->itemRevised;
    }

    /**
     * @param mixed $reserveLowered
     */
    public function setReserveLowered($reserveLowered)
    {
        $this->reserveLowered = $reserveLowered;
    }

    /**
     * @return mixed
     */
    public function getReserveLowered()
    {
        return $this->reserveLowered;
    }

    /**
     * @param mixed $reserveRemoved
     */
    public function setReserveRemoved($reserveRemoved)
    {
        $this->reserveRemoved = $reserveRemoved;
    }

    /**
     * @return mixed
     */
    public function getReserveRemoved()
    {
        return $this->reserveRemoved;
    }
}