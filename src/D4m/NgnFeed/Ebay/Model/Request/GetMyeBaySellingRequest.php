<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 7/12/14 - 12:03 AM
 */

namespace D4m\NgnFeed\Ebay\Model\Request;


class GetMyeBaySellingRequest extends BaseRequest
{
    protected $scheduledList;
    protected $activeList;
    protected $soldList;
    protected $unsoldList;
    protected $bidList;
    protected $deletedFromSoldList;
    protected $deletedFromUnsoldList;
    protected $sellingSummary;
    protected $hideVariations;

    /**
     * @return mixed
     */
    public function getActiveList()
    {
        return $this->activeList;
    }

    /**
     * @param mixed $activeList
     */
    public function setActiveList($activeList)
    {
        $this->activeList = $activeList;
    }

    /**
     * @return mixed
     */
    public function getBidList()
    {
        return $this->bidList;
    }

    /**
     * @param mixed $bidList
     */
    public function setBidList($bidList)
    {
        $this->bidList = $bidList;
    }

    /**
     * @return mixed
     */
    public function getDeletedFromSoldList()
    {
        return $this->deletedFromSoldList;
    }

    /**
     * @param mixed $deletedFromSoldList
     */
    public function setDeletedFromSoldList($deletedFromSoldList)
    {
        $this->deletedFromSoldList = $deletedFromSoldList;
    }

    /**
     * @return mixed
     */
    public function getDeletedFromUnsoldList()
    {
        return $this->deletedFromUnsoldList;
    }

    /**
     * @param mixed $deletedFromUnsoldList
     */
    public function setDeletedFromUnsoldList($deletedFromUnsoldList)
    {
        $this->deletedFromUnsoldList = $deletedFromUnsoldList;
    }

    /**
     * @return mixed
     */
    public function getHideVariations()
    {
        return $this->hideVariations;
    }

    /**
     * @param mixed $hideVariations
     */
    public function setHideVariations($hideVariations)
    {
        $this->hideVariations = $hideVariations;
    }

    /**
     * @return mixed
     */
    public function getScheduledList()
    {
        return $this->scheduledList;
    }

    /**
     * @param mixed $scheduledList
     */
    public function setScheduledList($scheduledList)
    {
        $this->scheduledList = $scheduledList;
    }

    /**
     * @return mixed
     */
    public function getSellingSummary()
    {
        return $this->sellingSummary;
    }

    /**
     * @param mixed $sellingSummary
     */
    public function setSellingSummary($sellingSummary)
    {
        $this->sellingSummary = $sellingSummary;
    }

    /**
     * @return mixed
     */
    public function getSoldList()
    {
        return $this->soldList;
    }

    /**
     * @param mixed $soldList
     */
    public function setSoldList($soldList)
    {
        $this->soldList = $soldList;
    }

    /**
     * @return mixed
     */
    public function getUnsoldList()
    {
        return $this->unsoldList;
    }

    /**
     * @param mixed $unsoldList
     */
    public function setUnsoldList($unsoldList)
    {
        $this->unsoldList = $unsoldList;
    }


} 