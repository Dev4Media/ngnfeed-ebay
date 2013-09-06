<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 9/5/13 - 9:15 PM
 * 
 */

namespace D4m\NgnFeed\Ebay\Model;


class TaxJurisdiction extends Entity
{
    protected $jurisdictionID;
    protected $salesTaxPercent;
    protected $shippingIncludedInTax;
    protected $jurisdictionName;
    protected $detailVersion;
    protected $updateTime;
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
     * @param mixed $detailVersion
     */
    public function setDetailVersion($detailVersion)
    {
        $this->detailVersion = $detailVersion;
    }

    /**
     * @return mixed
     */
    public function getDetailVersion()
    {
        return $this->detailVersion;
    }

    /**
     * @param mixed $jurisdictionID
     */
    public function setJurisdictionID($jurisdictionID)
    {
        $this->jurisdictionID = $jurisdictionID;
    }

    /**
     * @return mixed
     */
    public function getJurisdictionID()
    {
        return $this->jurisdictionID;
    }

    /**
     * @param mixed $jurisdictionName
     */
    public function setJurisdictionName($jurisdictionName)
    {
        $this->jurisdictionName = $jurisdictionName;
    }

    /**
     * @return mixed
     */
    public function getJurisdictionName()
    {
        return $this->jurisdictionName;
    }

    /**
     * @param mixed $salesTaxPercent
     */
    public function setSalesTaxPercent($salesTaxPercent)
    {
        $this->salesTaxPercent = $salesTaxPercent;
    }

    /**
     * @return mixed
     */
    public function getSalesTaxPercent()
    {
        return $this->salesTaxPercent;
    }

    /**
     * @param mixed $shippingIncludedInTax
     */
    public function setShippingIncludedInTax($shippingIncludedInTax)
    {
        $this->shippingIncludedInTax = $shippingIncludedInTax;
    }

    /**
     * @return mixed
     */
    public function getShippingIncludedInTax()
    {
        return $this->shippingIncludedInTax;
    }

    /**
     * @param mixed $updateTime
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;
    }

    /**
     * @return mixed
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }
}