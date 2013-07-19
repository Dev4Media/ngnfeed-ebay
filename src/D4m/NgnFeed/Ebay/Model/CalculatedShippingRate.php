<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 7/19/13 - 3:17 AM
 * 
 */

namespace D4m\NgnFeed\Ebay\Model;

class CalculatedShippingRate extends Entity
{
    protected $originatingPostalCode;
    protected $measurementUnit;
    protected $packageDepth;
    protected $packageLength;
    protected $packageWidth;
    protected $packagingHandlingCosts;
    protected $shippingIrregular;
    protected $shippingPackage;
    protected $weightMajor;
    protected $weightMinor;
    protected $internationalPackagingHandlingCosts;
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
     * @param mixed $internationalPackagingHandlingCosts
     */
    public function setInternationalPackagingHandlingCosts($internationalPackagingHandlingCosts)
    {
        $this->internationalPackagingHandlingCosts = $internationalPackagingHandlingCosts;
    }

    /**
     * @return mixed
     */
    public function getInternationalPackagingHandlingCosts()
    {
        return $this->internationalPackagingHandlingCosts;
    }

    /**
     * @param mixed $measurementUnit
     */
    public function setMeasurementUnit($measurementUnit)
    {
        $this->measurementUnit = $measurementUnit;
    }

    /**
     * @return mixed
     */
    public function getMeasurementUnit()
    {
        return $this->measurementUnit;
    }

    /**
     * @param mixed $originatingPostalCode
     */
    public function setOriginatingPostalCode($originatingPostalCode)
    {
        $this->originatingPostalCode = $originatingPostalCode;
    }

    /**
     * @return mixed
     */
    public function getOriginatingPostalCode()
    {
        return $this->originatingPostalCode;
    }

    /**
     * @param mixed $packageDepth
     */
    public function setPackageDepth($packageDepth)
    {
        $this->packageDepth = $packageDepth;
    }

    /**
     * @return mixed
     */
    public function getPackageDepth()
    {
        return $this->packageDepth;
    }

    /**
     * @param mixed $packageLength
     */
    public function setPackageLength($packageLength)
    {
        $this->packageLength = $packageLength;
    }

    /**
     * @return mixed
     */
    public function getPackageLength()
    {
        return $this->packageLength;
    }

    /**
     * @param mixed $packageWidth
     */
    public function setPackageWidth($packageWidth)
    {
        $this->packageWidth = $packageWidth;
    }

    /**
     * @return mixed
     */
    public function getPackageWidth()
    {
        return $this->packageWidth;
    }

    /**
     * @param mixed $packagingHandlingCosts
     */
    public function setPackagingHandlingCosts($packagingHandlingCosts)
    {
        $this->packagingHandlingCosts = $packagingHandlingCosts;
    }

    /**
     * @return mixed
     */
    public function getPackagingHandlingCosts()
    {
        return $this->packagingHandlingCosts;
    }

    /**
     * @param mixed $shippingIrregular
     */
    public function setShippingIrregular($shippingIrregular)
    {
        $this->shippingIrregular = $shippingIrregular;
    }

    /**
     * @return mixed
     */
    public function getShippingIrregular()
    {
        return $this->shippingIrregular;
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
     * @param mixed $weightMajor
     */
    public function setWeightMajor($weightMajor)
    {
        $this->weightMajor = $weightMajor;
    }

    /**
     * @return mixed
     */
    public function getWeightMajor()
    {
        return $this->weightMajor;
    }

    /**
     * @param mixed $weightMinor
     */
    public function setWeightMinor($weightMinor)
    {
        $this->weightMinor = $weightMinor;
    }

    /**
     * @return mixed
     */
    public function getWeightMinor()
    {
        return $this->weightMinor;
    }
}