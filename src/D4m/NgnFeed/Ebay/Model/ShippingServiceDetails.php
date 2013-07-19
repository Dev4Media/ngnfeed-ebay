<?php

namespace D4m\NgnFeed\Ebay\Model;

class ShippingServiceDetails extends Entity
{
    protected $description;
    protected $expeditedService;
    protected $internationalService;
    protected $shippingService;
    protected $shippingServiceID;
    protected $shippingTimeMax;
    protected $shippingTimeMin;
    protected $shippingServiceCode;
    protected $serviceType;
    protected $shippingPackage;
    protected $dimensionsRequired;
    protected $validForSellingFlow;
    protected $surchargeApplicable;
    protected $shippingCarrier;
    protected $codService;
    protected $deprecationDetails;
    protected $mappedToShippingServiceID;
    protected $costGroupFlat;
    protected $shippingServicePackageDetails;
    protected $weightRequired;
    protected $detailVersion;
    protected $updateTime;
    protected $shippingCategory;
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
     * @param mixed $codService
     */
    public function setCodService($codService)
    {
        $this->codService = $codService;
    }

    /**
     * @return mixed
     */
    public function getCodService()
    {
        return $this->codService;
    }

    /**
     * @param mixed $costGroupFlat
     */
    public function setCostGroupFlat($costGroupFlat)
    {
        $this->costGroupFlat = $costGroupFlat;
    }

    /**
     * @return mixed
     */
    public function getCostGroupFlat()
    {
        return $this->costGroupFlat;
    }

    /**
     * @param mixed $deprecationDetails
     */
    public function setDeprecationDetails($deprecationDetails)
    {
        $this->deprecationDetails = $deprecationDetails;
    }

    /**
     * @return mixed
     */
    public function getDeprecationDetails()
    {
        return $this->deprecationDetails;
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
     * @param mixed $dimensionsRequired
     */
    public function setDimensionsRequired($dimensionsRequired)
    {
        $this->dimensionsRequired = $dimensionsRequired;
    }

    /**
     * @return mixed
     */
    public function getDimensionsRequired()
    {
        return $this->dimensionsRequired;
    }

    /**
     * @param mixed $expeditedService
     */
    public function setExpeditedService($expeditedService)
    {
        $this->expeditedService = $expeditedService;
    }

    /**
     * @return mixed
     */
    public function getExpeditedService()
    {
        return $this->expeditedService;
    }

    /**
     * @param mixed $internationalService
     */
    public function setInternationalService($internationalService)
    {
        $this->internationalService = $internationalService;
    }

    /**
     * @return mixed
     */
    public function getInternationalService()
    {
        return $this->internationalService;
    }

    /**
     * @param mixed $mappedToShippingServiceID
     */
    public function setMappedToShippingServiceID($mappedToShippingServiceID)
    {
        $this->mappedToShippingServiceID = $mappedToShippingServiceID;
    }

    /**
     * @return mixed
     */
    public function getMappedToShippingServiceID()
    {
        return $this->mappedToShippingServiceID;
    }

    /**
     * @param mixed $serviceType
     */
    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;
    }

    /**
     * @return mixed
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * @param mixed $shippingCarrier
     */
    public function setShippingCarrier($shippingCarrier)
    {
        $this->shippingCarrier = $shippingCarrier;
    }

    /**
     * @return mixed
     */
    public function getShippingCarrier()
    {
        return $this->shippingCarrier;
    }

    /**
     * @param mixed $shippingCategory
     */
    public function setShippingCategory($shippingCategory)
    {
        $this->shippingCategory = $shippingCategory;
    }

    /**
     * @return mixed
     */
    public function getShippingCategory()
    {
        return $this->shippingCategory;
    }

    /**
     * @param mixed $shippingPackage
     */
    public function setShippingPackage($shippingPackage)
    {
        $this->shippingPackage = $shippingPackage;
    }

    /**
     * @return mixed
     */
    public function getShippingPackage()
    {
        return $this->shippingPackage;
    }

    /**
     * @param mixed $shippingService
     */
    public function setShippingService($shippingService)
    {
        $this->shippingService = $shippingService;
    }

    /**
     * @return mixed
     */
    public function getShippingService()
    {
        return $this->shippingService;
    }

    /**
     * @param mixed $shippingServiceCode
     */
    public function setShippingServiceCode($shippingServiceCode)
    {
        $this->shippingServiceCode = $shippingServiceCode;
    }

    /**
     * @return mixed
     */
    public function getShippingServiceCode()
    {
        return $this->shippingServiceCode;
    }

    /**
     * @param mixed $shippingServiceID
     */
    public function setShippingServiceID($shippingServiceID)
    {
        $this->shippingServiceID = $shippingServiceID;
    }

    /**
     * @return mixed
     */
    public function getShippingServiceID()
    {
        return $this->shippingServiceID;
    }

    /**
     * @param mixed $shippingServicePackageDetails
     */
    public function setShippingServicePackageDetails($shippingServicePackageDetails)
    {
        $this->shippingServicePackageDetails = $shippingServicePackageDetails;
    }

    /**
     * @return mixed
     */
    public function getShippingServicePackageDetails()
    {
        return $this->shippingServicePackageDetails;
    }

    /**
     * @param mixed $shippingTimeMax
     */
    public function setShippingTimeMax($shippingTimeMax)
    {
        $this->shippingTimeMax = $shippingTimeMax;
    }

    /**
     * @return mixed
     */
    public function getShippingTimeMax()
    {
        return $this->shippingTimeMax;
    }

    /**
     * @param mixed $shippingTimeMin
     */
    public function setShippingTimeMin($shippingTimeMin)
    {
        $this->shippingTimeMin = $shippingTimeMin;
    }

    /**
     * @return mixed
     */
    public function getShippingTimeMin()
    {
        return $this->shippingTimeMin;
    }

    /**
     * @param mixed $surchargeApplicable
     */
    public function setSurchargeApplicable($surchargeApplicable)
    {
        $this->surchargeApplicable = $surchargeApplicable;
    }

    /**
     * @return mixed
     */
    public function getSurchargeApplicable()
    {
        return $this->surchargeApplicable;
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

    /**
     * @param mixed $validForSellingFlow
     */
    public function setValidForSellingFlow($validForSellingFlow)
    {
        $this->validForSellingFlow = $validForSellingFlow;
    }

    /**
     * @return mixed
     */
    public function getValidForSellingFlow()
    {
        return $this->validForSellingFlow;
    }

    /**
     * @param mixed $weightRequired
     */
    public function setWeightRequired($weightRequired)
    {
        $this->weightRequired = $weightRequired;
    }

    /**
     * @return mixed
     */
    public function getWeightRequired()
    {
        return $this->weightRequired;
    }
}