<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 2/24/14 - 11:08 AM
 */

namespace D4m\NgnFeed\Ebay\Model\Request;

class GetSellingManagerSoldListingsRequest extends BaseRequest
{
    protected $archived;
    protected $filter;
    protected $pagination;
    protected $saleDateRange;
    protected $search;
    protected $sort;
    protected $sortOrder;
    protected $storeCategoryID;

    /**
     * @param mixed $archived
     */
    public function setArchived($archived)
    {
        $this->archived = $archived;
    }

    /**
     * @return mixed
     */
    public function getArchived()
    {
        return $this->archived;
    }

    /**
     * @param mixed $filter
     */
    public function setFilter($filter)
    {
        $this->filter = $filter;
    }

    /**
     * @return mixed
     */
    public function getFilter()
    {
        return $this->filter;
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
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * @param mixed $saleDateRange
     */
    public function setSaleDateRange($saleDateRange)
    {
        $this->saleDateRange = $saleDateRange;
    }

    /**
     * @return mixed
     */
    public function getSaleDateRange()
    {
        return $this->saleDateRange;
    }

    /**
     * @param mixed $search
     */
    public function setSearch($search)
    {
        $this->search = $search;
    }

    /**
     * @return mixed
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * @param mixed $sort
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
    }

    /**
     * @return mixed
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param mixed $sortOrder
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }

    /**
     * @return mixed
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * @param mixed $storeCategoryID
     */
    public function setStoreCategoryID($storeCategoryID)
    {
        $this->storeCategoryID = $storeCategoryID;
    }

    /**
     * @return mixed
     */
    public function getStoreCategoryID()
    {
        return $this->storeCategoryID;
    }

} 