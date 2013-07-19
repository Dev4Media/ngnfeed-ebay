<?php

namespace D4m\NgnFeed\Ebay\Model;

class ShippingPackageDetails extends Entity
{
    protected $packageID;
    protected $description;
    protected $shippingPackage;
    protected $defaultValue;
    protected $dimensionsSupported;
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
     * @param mixed $defaultValue
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }

    /**
     * @return mixed
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
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
     * @param mixed $dimensionsSupported
     */
    public function setDimensionsSupported($dimensionsSupported)
    {
        $this->dimensionsSupported = $dimensionsSupported;
    }

    /**
     * @return mixed
     */
    public function getDimensionsSupported()
    {
        return $this->dimensionsSupported;
    }

    /**
     * @param mixed $packageID
     */
    public function setPackageID($packageID)
    {
        $this->packageID = $packageID;
    }

    /**
     * @return mixed
     */
    public function getPackageID()
    {
        return $this->packageID;
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