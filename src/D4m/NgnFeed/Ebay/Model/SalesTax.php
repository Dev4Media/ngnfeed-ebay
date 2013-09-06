<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 9/5/13 - 9:00 PM
 * 
 */

namespace D4m\NgnFeed\Ebay\Model;

class SalesTax extends Entity
{
    protected $salesTaxPercent;
    protected $salesTaxState;
    protected $shippingIncludedInTax;
    protected $salesTaxAmount;
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
     * @param mixed $salesTaxAmount
     */
    public function setSalesTaxAmount($salesTaxAmount)
    {
        $this->salesTaxAmount = $salesTaxAmount;
    }

    /**
     * @return mixed
     */
    public function getSalesTaxAmount()
    {
        return $this->salesTaxAmount;
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
     * @param mixed $salesTaxState
     */
    public function setSalesTaxState($salesTaxState)
    {
        $this->salesTaxState = $salesTaxState;
    }

    /**
     * @return mixed
     */
    public function getSalesTaxState()
    {
        return $this->salesTaxState;
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
}