<?php
/**
 * @author: Raul Rodriguez - raulrodriguez782@gmail.com
 * @created: 7/24/13 - 2:54 AM
 * 
 */

namespace D4m\NgnFeed\Ebay\Model;


class InternationalShippingServiceOptions extends Entity
{
    protected $shippingService;
    protected $shippingServiceCost;
    protected $shippingServiceAdditionalCost;
    protected $shippingServicePriority;
    protected $shipToLocation;
    protected $shippingInsuranceCost;
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
     * @param mixed $shipToLocation
     */
    public function setShipToLocation($shipToLocation)
    {
        $this->shipToLocation = $shipToLocation;
    }

    /**
     * @return mixed
     */
    public function getShipToLocation()
    {
        return $this->shipToLocation;
    }
}