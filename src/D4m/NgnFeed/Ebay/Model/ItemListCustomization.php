<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 7/12/14 - 12:12 AM
 */

namespace D4m\NgnFeed\Ebay\Model;


class ItemListCustomization extends Entity
{
    protected $include;
    protected $listingType;
    protected $sort;
    protected $durationInDays;
    protected $includeNotes;
    protected $pagination;
    protected $orderStatusFilter;
    protected $any;

    /**
     * @return mixed
     */
    public function getAny()
    {
        return $this->any;
    }

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
    public function getDurationInDays()
    {
        return $this->durationInDays;
    }

    /**
     * @param mixed $durationInDays
     */
    public function setDurationInDays($durationInDays)
    {
        $this->durationInDays = $durationInDays;
    }

    /**
     * @return mixed
     */
    public function getInclude()
    {
        return $this->include;
    }

    /**
     * @param mixed $include
     */
    public function setInclude($include)
    {
        $this->include = $include;
    }

    /**
     * @return mixed
     */
    public function getIncludeNotes()
    {
        return $this->includeNotes;
    }

    /**
     * @param mixed $includeNotes
     */
    public function setIncludeNotes($includeNotes)
    {
        $this->includeNotes = $includeNotes;
    }

    /**
     * @return mixed
     */
    public function getListingType()
    {
        return $this->listingType;
    }

    /**
     * @param mixed $listingType
     */
    public function setListingType($listingType)
    {
        $this->listingType = $listingType;
    }

    /**
     * @return mixed
     */
    public function getOrderStatusFilter()
    {
        return $this->orderStatusFilter;
    }

    /**
     * @param mixed $orderStatusFilter
     */
    public function setOrderStatusFilter($orderStatusFilter)
    {
        $this->orderStatusFilter = $orderStatusFilter;
    }

    /**
     * @return mixed
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * @param mixed $pagination
     */
    public function setPagination($pagination)
    {
        $this->pagination = $pagination;
    }

    /**
     * @return mixed
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param mixed $sort
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
    }
} 