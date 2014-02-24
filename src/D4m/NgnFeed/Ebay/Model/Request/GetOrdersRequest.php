<?php
/**
 * Created by PhpStorm.
 * User: raul
 * Date: 2/24/14
 * Time: 3:56 PM
 */

namespace D4m\NgnFeed\Ebay\Model\Request;


class GetOrdersRequest extends BaseRequest
{
    protected $orderIDArray;
    protected $createTimeFrom;
    protected $createTimeTo;
    protected $orderRole;
    protected $orderStatus;
    protected $listingType;
    protected $pagination;
    protected $modTimeFrom;
    protected $modTimeTo;
    protected $numberOfDays;
    protected $includeFinalValueFee;
    protected $sortingOrder;

    /**
     * @param mixed $createTimeFrom
     */
    public function setCreateTimeFrom($createTimeFrom)
    {
        $this->createTimeFrom = $createTimeFrom;
    }

    /**
     * @return mixed
     */
    public function getCreateTimeFrom()
    {
        return $this->createTimeFrom;
    }

    /**
     * @param mixed $createTimeTo
     */
    public function setCreateTimeTo($createTimeTo)
    {
        $this->createTimeTo = $createTimeTo;
    }

    /**
     * @return mixed
     */
    public function getCreateTimeTo()
    {
        return $this->createTimeTo;
    }

    /**
     * @param mixed $includeFinalValueFee
     */
    public function setIncludeFinalValueFee($includeFinalValueFee)
    {
        $this->includeFinalValueFee = $includeFinalValueFee;
    }

    /**
     * @return mixed
     */
    public function getIncludeFinalValueFee()
    {
        return $this->includeFinalValueFee;
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
    public function getListingType()
    {
        return $this->listingType;
    }

    /**
     * @param mixed $modTimeFrom
     */
    public function setModTimeFrom($modTimeFrom)
    {
        $this->modTimeFrom = $modTimeFrom;
    }

    /**
     * @return mixed
     */
    public function getModTimeFrom()
    {
        return $this->modTimeFrom;
    }

    /**
     * @param mixed $modTimeTo
     */
    public function setModTimeTo($modTimeTo)
    {
        $this->modTimeTo = $modTimeTo;
    }

    /**
     * @return mixed
     */
    public function getModTimeTo()
    {
        return $this->modTimeTo;
    }

    /**
     * @param mixed $numberOfDays
     */
    public function setNumberOfDays($numberOfDays)
    {
        $this->numberOfDays = $numberOfDays;
    }

    /**
     * @return mixed
     */
    public function getNumberOfDays()
    {
        return $this->numberOfDays;
    }

    /**
     * @param mixed $orderIDArray
     */
    public function setOrderIDArray($orderIDArray)
    {
        $this->orderIDArray = $orderIDArray;
    }

    /**
     * @return mixed
     */
    public function getOrderIDArray()
    {
        return $this->orderIDArray;
    }

    /**
     * @param mixed $orderRole
     */
    public function setOrderRole($orderRole)
    {
        $this->orderRole = $orderRole;
    }

    /**
     * @return mixed
     */
    public function getOrderRole()
    {
        return $this->orderRole;
    }

    /**
     * @param mixed $orderStatus
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
    }

    /**
     * @return mixed
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
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
     * @param mixed $sortingOrder
     */
    public function setSortingOrder($sortingOrder)
    {
        $this->sortingOrder = $sortingOrder;
    }

    /**
     * @return mixed
     */
    public function getSortingOrder()
    {
        return $this->sortingOrder;
    }

} 