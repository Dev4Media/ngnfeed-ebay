<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 9/5/13 - 8:29 PM
 * 
 */

namespace D4m\NgnFeed\Ebay\Model;

class ShipPackageDetails extends Entity
{
    protected $measurementUnit;
    protected $packageDepth;
    protected $packageLength;
    protected $packageWidth;
    protected $shippingIrregular;
    protected $shippingPackage;
    protected $weightMajor;
    protected $weightMinor;
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