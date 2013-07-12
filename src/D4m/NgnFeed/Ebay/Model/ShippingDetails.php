<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 7/4/13 - 11:15 PM
 * 
 */

namespace D4m\NgnFeed\Ebay\Model;


class ShippingDetails extends Entity
{

    protected $allowPaymentEdit;
    protected $applyShippingDiscount;
    protected $globalShipping;
    protected $calculatedShippingRate;
    protected $changePaymentInstructions;
    protected $insuranceFee;
    protected $insuranceOption;
    protected $insuranceWanted;
    protected $paymentEdited;
    protected $paymentInstructions;
    protected $salesTax;
    protected $shippingRateErrorMessage;
    protected $shippingRateType;
    protected $shippingServiceOptions;
    protected $internationalShippingServiceOption;
    protected $shippingType;
    protected $sellingManagerSalesRecordNumber;
    protected $thirdPartyCheckout;
    protected $taxTable;
    protected $getItFast;
    protected $shippingServiceUsed;
    protected $defaultShippingCost;
    protected $insuranceDetails;
    protected $internationalInsuranceDetails;
    protected $shippingDiscountProfileID;
    protected $flatShippingDiscount;
    protected $calculatedShippingDiscount;
    protected $promotionalShippingDiscount;
    protected $internationalShippingDiscountProfileID;
    protected $internationalFlatShippingDiscount;
    protected $internationalCalculatedShippingDiscount;
    protected $internationalPromotionalShippingDiscount;
    protected $promotionalShippingDiscountDetails;
    protected $codCost;
    protected $excludeShipToLocation;
    protected $sellerExcludeShipToLocationsPreference;
    protected $shipmentTrackingDetails;
    protected $rateTableDetails;
    protected $any;

    /**
     * @param mixed $allowPaymentEdit
     */
    public function setAllowPaymentEdit($allowPaymentEdit)
    {
        $this->allowPaymentEdit = $allowPaymentEdit;
    }

    /**
     * @return mixed
     */
    public function getAllowPaymentEdit()
    {
        return $this->allowPaymentEdit;
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
    public function getAny()
    {
        return $this->any;
    }

    /**
     * @param mixed $applyShippingDiscount
     */
    public function setApplyShippingDiscount($applyShippingDiscount)
    {
        $this->applyShippingDiscount = $applyShippingDiscount;
    }

    /**
     * @return mixed
     */
    public function getApplyShippingDiscount()
    {
        return $this->applyShippingDiscount;
    }

    /**
     * @param mixed $calculatedShippingDiscount
     */
    public function setCalculatedShippingDiscount($calculatedShippingDiscount)
    {
        $this->calculatedShippingDiscount = $calculatedShippingDiscount;
    }

    /**
     * @return mixed
     */
    public function getCalculatedShippingDiscount()
    {
        return $this->calculatedShippingDiscount;
    }

    /**
     * @param mixed $calculatedShippingRate
     */
    public function setCalculatedShippingRate($calculatedShippingRate)
    {
        $this->calculatedShippingRate = $calculatedShippingRate;
    }

    /**
     * @return mixed
     */
    public function getCalculatedShippingRate()
    {
        return $this->calculatedShippingRate;
    }

    /**
     * @param mixed $changePaymentInstructions
     */
    public function setChangePaymentInstructions($changePaymentInstructions)
    {
        $this->changePaymentInstructions = $changePaymentInstructions;
    }

    /**
     * @return mixed
     */
    public function getChangePaymentInstructions()
    {
        return $this->changePaymentInstructions;
    }

    /**
     * @param mixed $codCost
     */
    public function setCodCost($codCost)
    {
        $this->codCost = $codCost;
    }

    /**
     * @return mixed
     */
    public function getCodCost()
    {
        return $this->codCost;
    }

    /**
     * @param mixed $defaultShippingCost
     */
    public function setDefaultShippingCost($defaultShippingCost)
    {
        $this->defaultShippingCost = $defaultShippingCost;
    }

    /**
     * @return mixed
     */
    public function getDefaultShippingCost()
    {
        return $this->defaultShippingCost;
    }

    /**
     * @param mixed $excludeShipToLocation
     */
    public function setExcludeShipToLocation($excludeShipToLocation)
    {
        $this->excludeShipToLocation = $excludeShipToLocation;
    }

    /**
     * @return mixed
     */
    public function getExcludeShipToLocation()
    {
        return $this->excludeShipToLocation;
    }

    /**
     * @param mixed $flatShippingDiscount
     */
    public function setFlatShippingDiscount($flatShippingDiscount)
    {
        $this->flatShippingDiscount = $flatShippingDiscount;
    }

    /**
     * @return mixed
     */
    public function getFlatShippingDiscount()
    {
        return $this->flatShippingDiscount;
    }

    /**
     * @param mixed $getItFast
     */
    public function setGetItFast($getItFast)
    {
        $this->getItFast = $getItFast;
    }

    /**
     * @return mixed
     */
    public function getGetItFast()
    {
        return $this->getItFast;
    }

    /**
     * @param mixed $globalShipping
     */
    public function setGlobalShipping($globalShipping)
    {
        $this->globalShipping = $globalShipping;
    }

    /**
     * @return mixed
     */
    public function getGlobalShipping()
    {
        return $this->globalShipping;
    }

    /**
     * @param mixed $insuranceDetails
     */
    public function setInsuranceDetails($insuranceDetails)
    {
        $this->insuranceDetails = $insuranceDetails;
    }

    /**
     * @return mixed
     */
    public function getInsuranceDetails()
    {
        return $this->insuranceDetails;
    }

    /**
     * @param mixed $insuranceFee
     */
    public function setInsuranceFee($insuranceFee)
    {
        $this->insuranceFee = $insuranceFee;
    }

    /**
     * @return mixed
     */
    public function getInsuranceFee()
    {
        return $this->insuranceFee;
    }

    /**
     * @param mixed $insuranceOption
     */
    public function setInsuranceOption($insuranceOption)
    {
        $this->insuranceOption = $insuranceOption;
    }

    /**
     * @return mixed
     */
    public function getInsuranceOption()
    {
        return $this->insuranceOption;
    }

    /**
     * @param mixed $insuranceWanted
     */
    public function setInsuranceWanted($insuranceWanted)
    {
        $this->insuranceWanted = $insuranceWanted;
    }

    /**
     * @return mixed
     */
    public function getInsuranceWanted()
    {
        return $this->insuranceWanted;
    }

    /**
     * @param mixed $internationalCalculatedShippingDiscount
     */
    public function setInternationalCalculatedShippingDiscount($internationalCalculatedShippingDiscount)
    {
        $this->internationalCalculatedShippingDiscount = $internationalCalculatedShippingDiscount;
    }

    /**
     * @return mixed
     */
    public function getInternationalCalculatedShippingDiscount()
    {
        return $this->internationalCalculatedShippingDiscount;
    }

    /**
     * @param mixed $internationalFlatShippingDiscount
     */
    public function setInternationalFlatShippingDiscount($internationalFlatShippingDiscount)
    {
        $this->internationalFlatShippingDiscount = $internationalFlatShippingDiscount;
    }

    /**
     * @return mixed
     */
    public function getInternationalFlatShippingDiscount()
    {
        return $this->internationalFlatShippingDiscount;
    }

    /**
     * @param mixed $internationalInsuranceDetails
     */
    public function setInternationalInsuranceDetails($internationalInsuranceDetails)
    {
        $this->internationalInsuranceDetails = $internationalInsuranceDetails;
    }

    /**
     * @return mixed
     */
    public function getInternationalInsuranceDetails()
    {
        return $this->internationalInsuranceDetails;
    }

    /**
     * @param mixed $internationalPromotionalShippingDiscount
     */
    public function setInternationalPromotionalShippingDiscount($internationalPromotionalShippingDiscount)
    {
        $this->internationalPromotionalShippingDiscount = $internationalPromotionalShippingDiscount;
    }

    /**
     * @return mixed
     */
    public function getInternationalPromotionalShippingDiscount()
    {
        return $this->internationalPromotionalShippingDiscount;
    }

    /**
     * @param mixed $internationalShippingDiscountProfileID
     */
    public function setInternationalShippingDiscountProfileID($internationalShippingDiscountProfileID)
    {
        $this->internationalShippingDiscountProfileID = $internationalShippingDiscountProfileID;
    }

    /**
     * @return mixed
     */
    public function getInternationalShippingDiscountProfileID()
    {
        return $this->internationalShippingDiscountProfileID;
    }

    /**
     * @param mixed $internationalShippingServiceOption
     */
    public function setInternationalShippingServiceOption($internationalShippingServiceOption)
    {
        $this->internationalShippingServiceOption = $internationalShippingServiceOption;
    }

    /**
     * @return mixed
     */
    public function getInternationalShippingServiceOption()
    {
        return $this->internationalShippingServiceOption;
    }

    /**
     * @param mixed $paymentEdited
     */
    public function setPaymentEdited($paymentEdited)
    {
        $this->paymentEdited = $paymentEdited;
    }

    /**
     * @return mixed
     */
    public function getPaymentEdited()
    {
        return $this->paymentEdited;
    }

    /**
     * @param mixed $paymentInstructions
     */
    public function setPaymentInstructions($paymentInstructions)
    {
        $this->paymentInstructions = $paymentInstructions;
    }

    /**
     * @return mixed
     */
    public function getPaymentInstructions()
    {
        return $this->paymentInstructions;
    }

    /**
     * @param mixed $promotionalShippingDiscount
     */
    public function setPromotionalShippingDiscount($promotionalShippingDiscount)
    {
        $this->promotionalShippingDiscount = $promotionalShippingDiscount;
    }

    /**
     * @return mixed
     */
    public function getPromotionalShippingDiscount()
    {
        return $this->promotionalShippingDiscount;
    }

    /**
     * @param mixed $promotionalShippingDiscountDetails
     */
    public function setPromotionalShippingDiscountDetails($promotionalShippingDiscountDetails)
    {
        $this->promotionalShippingDiscountDetails = $promotionalShippingDiscountDetails;
    }

    /**
     * @return mixed
     */
    public function getPromotionalShippingDiscountDetails()
    {
        return $this->promotionalShippingDiscountDetails;
    }

    /**
     * @param mixed $rateTableDetails
     */
    public function setRateTableDetails($rateTableDetails)
    {
        $this->rateTableDetails = $rateTableDetails;
    }

    /**
     * @return mixed
     */
    public function getRateTableDetails()
    {
        return $this->rateTableDetails;
    }

    /**
     * @param mixed $salesTax
     */
    public function setSalesTax($salesTax)
    {
        $this->salesTax = $salesTax;
    }

    /**
     * @return mixed
     */
    public function getSalesTax()
    {
        return $this->salesTax;
    }

    /**
     * @param mixed $sellerExcludeShipToLocationsPreference
     */
    public function setSellerExcludeShipToLocationsPreference($sellerExcludeShipToLocationsPreference)
    {
        $this->sellerExcludeShipToLocationsPreference = $sellerExcludeShipToLocationsPreference;
    }

    /**
     * @return mixed
     */
    public function getSellerExcludeShipToLocationsPreference()
    {
        return $this->sellerExcludeShipToLocationsPreference;
    }

    /**
     * @param mixed $sellingManagerSalesRecordNumber
     */
    public function setSellingManagerSalesRecordNumber($sellingManagerSalesRecordNumber)
    {
        $this->sellingManagerSalesRecordNumber = $sellingManagerSalesRecordNumber;
    }

    /**
     * @return mixed
     */
    public function getSellingManagerSalesRecordNumber()
    {
        return $this->sellingManagerSalesRecordNumber;
    }

    /**
     * @param mixed $shipmentTrackingDetails
     */
    public function setShipmentTrackingDetails($shipmentTrackingDetails)
    {
        $this->shipmentTrackingDetails = $shipmentTrackingDetails;
    }

    /**
     * @return mixed
     */
    public function getShipmentTrackingDetails()
    {
        return $this->shipmentTrackingDetails;
    }

    /**
     * @param mixed $shippingDiscountProfileID
     */
    public function setShippingDiscountProfileID($shippingDiscountProfileID)
    {
        $this->shippingDiscountProfileID = $shippingDiscountProfileID;
    }

    /**
     * @return mixed
     */
    public function getShippingDiscountProfileID()
    {
        return $this->shippingDiscountProfileID;
    }

    /**
     * @param mixed $shippingRateErrorMessage
     */
    public function setShippingRateErrorMessage($shippingRateErrorMessage)
    {
        $this->shippingRateErrorMessage = $shippingRateErrorMessage;
    }

    /**
     * @return mixed
     */
    public function getShippingRateErrorMessage()
    {
        return $this->shippingRateErrorMessage;
    }

    /**
     * @param mixed $shippingRateType
     */
    public function setShippingRateType($shippingRateType)
    {
        $this->shippingRateType = $shippingRateType;
    }

    /**
     * @return mixed
     */
    public function getShippingRateType()
    {
        return $this->shippingRateType;
    }

    /**
     * @param mixed $shippingServiceOptions
     */
    public function setShippingServiceOptions($shippingServiceOptions)
    {
        $this->shippingServiceOptions = $shippingServiceOptions;
    }

    /**
     * @return mixed
     */
    public function getShippingServiceOptions()
    {
        return $this->shippingServiceOptions;
    }

    /**
     * @param mixed $shippingServiceUsed
     */
    public function setShippingServiceUsed($shippingServiceUsed)
    {
        $this->shippingServiceUsed = $shippingServiceUsed;
    }

    /**
     * @return mixed
     */
    public function getShippingServiceUsed()
    {
        return $this->shippingServiceUsed;
    }

    /**
     * @param mixed $shippingType
     */
    public function setShippingType($shippingType)
    {
        $this->shippingType = $shippingType;
    }

    /**
     * @return mixed
     */
    public function getShippingType()
    {
        return $this->shippingType;
    }

    /**
     * @param mixed $taxTable
     */
    public function setTaxTable($taxTable)
    {
        $this->taxTable = $taxTable;
    }

    /**
     * @return mixed
     */
    public function getTaxTable()
    {
        return $this->taxTable;
    }

    /**
     * @param mixed $thirdPartyCheckout
     */
    public function setThirdPartyCheckout($thirdPartyCheckout)
    {
        $this->thirdPartyCheckout = $thirdPartyCheckout;
    }

    /**
     * @return mixed
     */
    public function getThirdPartyCheckout()
    {
        return $this->thirdPartyCheckout;
    }


}