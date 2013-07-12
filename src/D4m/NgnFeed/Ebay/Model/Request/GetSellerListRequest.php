<?php

namespace D4m\NgnFeed\Ebay\Model\Request;


class GetSellerListRequest extends BaseRequest
{
    protected $userID;
    protected $motorsDealerUsers;
    protected $endTimeFrom;
    protected $endTimeTo;
    protected $sort;
    protected $startTimeFrom;
    protected $startTimeTo;
    protected $pagination;
    protected $granularityLevel;
    protected $skuArray;
    protected $includeWatchCount;
    protected $adminEndedItemsOnly;
    protected $categoryID;
    protected $includeVariations;

    /**
     * @param mixed $adminEndedItemsOnly
     */
    public function setAdminEndedItemsOnly($adminEndedItemsOnly)
    {
        $this->adminEndedItemsOnly = $adminEndedItemsOnly;
    }

    /**
     * @return mixed
     */
    public function getAdminEndedItemsOnly()
    {
        return $this->adminEndedItemsOnly;
    }

    /**
     * @param mixed $categoryID
     */
    public function setCategoryID($categoryID)
    {
        $this->categoryID = $categoryID;
    }

    /**
     * @return mixed
     */
    public function getCategoryID()
    {
        return $this->categoryID;
    }

    /**
     * @param mixed $endTimeFrom
     */
    public function setEndTimeFrom($endTimeFrom)
    {
        $this->endTimeFrom = $endTimeFrom;
    }

    /**
     * @return mixed
     */
    public function getEndTimeFrom()
    {
        return $this->endTimeFrom;
    }

    /**
     * @param mixed $endTimeTo
     */
    public function setEndTimeTo($endTimeTo)
    {
        $this->endTimeTo = $endTimeTo;
    }

    /**
     * @return mixed
     */
    public function getEndTimeTo()
    {
        return $this->endTimeTo;
    }

    /**
     * @param mixed $granularityLevel
     */
    public function setGranularityLevel($granularityLevel)
    {
        $this->granularityLevel = $granularityLevel;
    }

    /**
     * @return mixed
     */
    public function getGranularityLevel()
    {
        return $this->granularityLevel;
    }

    /**
     * @param mixed $includeVariations
     */
    public function setIncludeVariations($includeVariations)
    {
        $this->includeVariations = $includeVariations;
    }

    /**
     * @return mixed
     */
    public function getIncludeVariations()
    {
        return $this->includeVariations;
    }

    /**
     * @param mixed $includeWatchCount
     */
    public function setIncludeWatchCount($includeWatchCount)
    {
        $this->includeWatchCount = $includeWatchCount;
    }

    /**
     * @return mixed
     */
    public function getIncludeWatchCount()
    {
        return $this->includeWatchCount;
    }

    /**
     * @param mixed $motorsDealerUsers
     */
    public function setMotorsDealerUsers($motorsDealerUsers)
    {
        $this->motorsDealerUsers = $motorsDealerUsers;
    }

    /**
     * @return mixed
     */
    public function getMotorsDealerUsers()
    {
        return $this->motorsDealerUsers;
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
     * @param mixed $skuArray
     */
    public function setSkuArray($skuArray)
    {
        $this->skuArray = $skuArray;
    }

    /**
     * @return mixed
     */
    public function getSkuArray()
    {
        return $this->skuArray;
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
     * @param mixed $startTimeFrom
     */
    public function setStartTimeFrom($startTimeFrom)
    {
        $this->startTimeFrom = $startTimeFrom;
    }

    /**
     * @return mixed
     */
    public function getStartTimeFrom()
    {
        return $this->startTimeFrom;
    }

    /**
     * @param mixed $startTimeTo
     */
    public function setStartTimeTo($startTimeTo)
    {
        $this->startTimeTo = $startTimeTo;
    }

    /**
     * @return mixed
     */
    public function getStartTimeTo()
    {
        return $this->startTimeTo;
    }

    /**
     * @param mixed $userID
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
    }

    /**
     * @return mixed
     */
    public function getUserID()
    {
        return $this->userID;
    }



}