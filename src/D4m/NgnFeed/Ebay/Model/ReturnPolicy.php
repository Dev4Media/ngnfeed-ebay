<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 7/4/13 - 9:23 PM
 * 
 */

namespace D4m\NgnFeed\Ebay\Model;

class ReturnPolicy extends Entity
{
    protected $refundOption;
    protected $refund;
    protected $returnsWithinOption;
    protected $returnsWithin;
    protected $returnsAcceptedOption;
    protected $returnsAccepted;
    protected $description;
    protected $warrantyOfferedOption;
    protected $warrantyOffered;
    protected $warrantyTypeOption;
    protected $warrantyType;
    protected $warrantyDurationOption;
    protected $warrantyDuration;
    protected $ean;
    protected $shippingCostPaidByOption;
    protected $shippingCostPaidBy;
    protected $restockingFeeValue;
    protected $restockingFeeValueOption;
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
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $ean
     */
    public function setEan($ean)
    {
        $this->ean = $ean;
    }

    /**
     * @return mixed
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * @param mixed $refund
     */
    public function setRefund($refund)
    {
        $this->refund = $refund;
    }

    /**
     * @return mixed
     */
    public function getRefund()
    {
        return $this->refund;
    }

    /**
     * @param mixed $refundOption
     */
    public function setRefundOption($refundOption)
    {
        $this->refundOption = $refundOption;
    }

    /**
     * @return mixed
     */
    public function getRefundOption()
    {
        return $this->refundOption;
    }

    /**
     * @param mixed $restockingFeeValue
     */
    public function setRestockingFeeValue($restockingFeeValue)
    {
        $this->restockingFeeValue = $restockingFeeValue;
    }

    /**
     * @return mixed
     */
    public function getRestockingFeeValue()
    {
        return $this->restockingFeeValue;
    }

    /**
     * @param mixed $restockingFeeValueOption
     */
    public function setRestockingFeeValueOption($restockingFeeValueOption)
    {
        $this->restockingFeeValueOption = $restockingFeeValueOption;
    }

    /**
     * @return mixed
     */
    public function getRestockingFeeValueOption()
    {
        return $this->restockingFeeValueOption;
    }

    /**
     * @param mixed $returnsAccepted
     */
    public function setReturnsAccepted($returnsAccepted)
    {
        $this->returnsAccepted = $returnsAccepted;
    }

    /**
     * @return mixed
     */
    public function getReturnsAccepted()
    {
        return $this->returnsAccepted;
    }

    /**
     * @param mixed $returnsAcceptedOption
     */
    public function setReturnsAcceptedOption($returnsAcceptedOption)
    {
        $this->returnsAcceptedOption = $returnsAcceptedOption;
    }

    /**
     * @return mixed
     */
    public function getReturnsAcceptedOption()
    {
        return $this->returnsAcceptedOption;
    }

    /**
     * @param mixed $returnsWithin
     */
    public function setReturnsWithin($returnsWithin)
    {
        $this->returnsWithin = $returnsWithin;
    }

    /**
     * @return mixed
     */
    public function getReturnsWithin()
    {
        return $this->returnsWithin;
    }

    /**
     * @param mixed $returnsWithinOption
     */
    public function setReturnsWithinOption($returnsWithinOption)
    {
        $this->returnsWithinOption = $returnsWithinOption;
    }

    /**
     * @return mixed
     */
    public function getReturnsWithinOption()
    {
        return $this->returnsWithinOption;
    }

    /**
     * @param mixed $shippingCostPaidBy
     */
    public function setShippingCostPaidBy($shippingCostPaidBy)
    {
        $this->shippingCostPaidBy = $shippingCostPaidBy;
    }

    /**
     * @return mixed
     */
    public function getShippingCostPaidBy()
    {
        return $this->shippingCostPaidBy;
    }

    /**
     * @param mixed $shippingCostPaidByOption
     */
    public function setShippingCostPaidByOption($shippingCostPaidByOption)
    {
        $this->shippingCostPaidByOption = $shippingCostPaidByOption;
    }

    /**
     * @return mixed
     */
    public function getShippingCostPaidByOption()
    {
        return $this->shippingCostPaidByOption;
    }

    /**
     * @param mixed $warrantyDuration
     */
    public function setWarrantyDuration($warrantyDuration)
    {
        $this->warrantyDuration = $warrantyDuration;
    }

    /**
     * @return mixed
     */
    public function getWarrantyDuration()
    {
        return $this->warrantyDuration;
    }

    /**
     * @param mixed $warrantyDurationOption
     */
    public function setWarrantyDurationOption($warrantyDurationOption)
    {
        $this->warrantyDurationOption = $warrantyDurationOption;
    }

    /**
     * @return mixed
     */
    public function getWarrantyDurationOption()
    {
        return $this->warrantyDurationOption;
    }

    /**
     * @param mixed $warrantyOffered
     */
    public function setWarrantyOffered($warrantyOffered)
    {
        $this->warrantyOffered = $warrantyOffered;
    }

    /**
     * @return mixed
     */
    public function getWarrantyOffered()
    {
        return $this->warrantyOffered;
    }

    /**
     * @param mixed $warrantyOfferedOption
     */
    public function setWarrantyOfferedOption($warrantyOfferedOption)
    {
        $this->warrantyOfferedOption = $warrantyOfferedOption;
    }

    /**
     * @return mixed
     */
    public function getWarrantyOfferedOption()
    {
        return $this->warrantyOfferedOption;
    }

    /**
     * @param mixed $warrantyType
     */
    public function setWarrantyType($warrantyType)
    {
        $this->warrantyType = $warrantyType;
    }

    /**
     * @return mixed
     */
    public function getWarrantyType()
    {
        return $this->warrantyType;
    }

    /**
     * @param mixed $warrantyTypeOption
     */
    public function setWarrantyTypeOption($warrantyTypeOption)
    {
        $this->warrantyTypeOption = $warrantyTypeOption;
    }

    /**
     * @return mixed
     */
    public function getWarrantyTypeOption()
    {
        return $this->warrantyTypeOption;
    }
}