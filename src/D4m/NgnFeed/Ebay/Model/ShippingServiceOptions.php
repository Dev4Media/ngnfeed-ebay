<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 7/4/13 - 11:57 PM
 * 
 */

namespace D4m\NgnFeed\Ebay\Model;


class ShippingServiceOptions extends Entity
{
    protected $shippingInsuranceCost;
    protected $shippingService;
    protected $shippingServiceCost;
    protected $shippingServiceAdditionalCost;
    protected $shippingServicePriority;
    protected $expeditedService;
    protected $shippingTimeMin;
    protected $shippingTimeMax;
    protected $shippingSurcharge;
    protected $freeShipping;
    protected $localPickup;
    protected $importCharge;
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
     * @param mixed $freeShipping
     */
    public function setFreeShipping($freeShipping)
    {
        $this->freeShipping = $freeShipping;
    }

    /**
     * @return mixed
     */
    public function getFreeShipping()
    {
        return $this->freeShipping;
    }

    /**
     * @param mixed $importCharge
     */
    public function setImportCharge($importCharge)
    {
        $this->importCharge = $importCharge;
    }

    /**
     * @return mixed
     */
    public function getImportCharge()
    {
        return $this->importCharge;
    }

    /**
     * @param mixed $localPickup
     */
    public function setLocalPickup($localPickup)
    {
        $this->localPickup = $localPickup;
    }

    /**
     * @return mixed
     */
    public function getLocalPickup()
    {
        return $this->localPickup;
    }

    /**
     * @param mixed $shippingInsuranceCost
     */
    public function setShippingInsuranceCost($shippingInsuranceCost)
    {
        $this->shippingInsuranceCost = $shippingInsuranceCost;
    }

    /**
     * @return mixed
     */
    public function getShippingInsuranceCost()
    {
        return $this->shippingInsuranceCost;
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
     * @param mixed $shippingServiceAdditionalCost
     */
    public function setShippingServiceAdditionalCost($shippingServiceAdditionalCost)
    {
        $this->shippingServiceAdditionalCost = $shippingServiceAdditionalCost;
    }

    /**
     * @return mixed
     */
    public function getShippingServiceAdditionalCost()
    {
        return $this->shippingServiceAdditionalCost;
    }

    /**
     * @param mixed $shippingServiceCost
     */
    public function setShippingServiceCost($shippingServiceCost)
    {
        $this->shippingServiceCost = $shippingServiceCost;
    }

    /**
     * @return mixed
     */
    public function getShippingServiceCost()
    {
        return $this->shippingServiceCost;
    }

    /**
     * @param mixed $shippingServicePriority
     */
    public function setShippingServicePriority($shippingServicePriority)
    {
        $this->shippingServicePriority = $shippingServicePriority;
    }

    /**
     * @return mixed
     */
    public function getShippingServicePriority()
    {
        return $this->shippingServicePriority;
    }

    /**
     * @param mixed $shippingSurcharge
     */
    public function setShippingSurcharge($shippingSurcharge)
    {
        $this->shippingSurcharge = $shippingSurcharge;
    }

    /**
     * @return mixed
     */
    public function getShippingSurcharge()
    {
        return $this->shippingSurcharge;
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


}